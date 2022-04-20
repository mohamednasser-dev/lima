<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\BrandDataTable;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\General\MultiDelete;
use App\Models\Brand;
use App\Models\BrandCertificate;
use App\Models\City;
use Illuminate\Http\Request;

class BrandController extends GeneralController
{
    protected $viewPath = 'brand';
    protected $path = 'brands';
    private $route = 'brands';
    private $image_path = 'brands';
    protected $paginate = 30;

    public function __construct(Brand $model)
    {
        parent::__construct($model);
    }

    public function index(BrandDataTable $dataTable)
    {
        return $dataTable->render('dashboard.' . $this->viewPath . '.index');
    }

    public function show($id)
    {
        $data = $this->model::with('city', 'Images')->findOrFail($id);
        return view('dashboard.' . $this->viewPath . '.details', compact('data'));
    }


    public function create()
    {
        $cities = City::all();
        return view('dashboard.' . $this->viewPath . '.create', compact('cities'));
    }

    public function store(BrandRequest $request)
    {
        $data = $request->validated();
        unset($data['_token']);
        if ($request->image) {
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->file('image'), $this->image_path);
            }
        } else {
            unset($data['image']);
        }
        if ($request->cover) {
            if ($request->hasFile('cover')) {
                $data['cover'] = $this->uploadImage($request->file('cover'), $this->image_path);
            }
        } else {
            unset($data['cover']);
        }
        unset($data['images']);
        $brand = $this->model::create($data);
        if ($request->images) {
            foreach ($request->images as $row) {
                $project_images_data['image'] = $row;
                $project_images_data['brand_id'] = $brand->id;
                BrandCertificate::create($project_images_data);
            }
        }
        return redirect()->route($this->route)->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $cities = City::all();
        $data = $this->model::with('Images')->findOrFail($id);
        return view('dashboard.' . $this->viewPath . '.edit', compact('data', 'cities'));
    }

    public function update(BrandRequest $request, $id)
    {
        $data = $request->validated();
        $item = $this->model->findOrFail($id);
        unset($data['_token']);
        if ($request->image) {
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->file('image'), $this->image_path, $item->image);
                $this->deleteImage($item->image);
            }
        } else {
            unset($data['image']);
        }
        if ($request->cover) {
            if ($request->hasFile('cover')) {
                $data['cover'] = $this->uploadImage($request->file('cover'), $this->image_path, $item->image);
                $this->deleteImage($item->cover);
            }
        } else {
            unset($data['cover']);
        }
        unset($data['images']);
        $this->model::where('id', $id)->update($data);;
        if ($request->images) {
            foreach ($request->images as $row) {
                $project_images_data['image'] = $row;
                $project_images_data['brand_id'] = $id;
                BrandCertificate::create($project_images_data);
            }
        }
        return redirect()->route($this->route)->with('success', 'تم التعديل بنجاح');
    }

    public function delete($id)
    {
        $data = $this->model::findOrFail($id);
        //check if there product inside brand ...
        if ($data->Products->count() > 0) {
            return redirect()->back()->with('danger', 'لا يمكنك الحذف - يوجد بداخل العلامه التجاريه منتجات ');
        }
        $this->deleteImage($data->image);
        $this->deleteImage($data->cover);
        //certificates destroy
        $certificates = BrandCertificate::where('brand_id', $id)->get();
        if ($certificates->count() > 0) {
            foreach ($certificates as $certficate) {
                $selected_certificate = BrandCertificate::findOrFail($certficate->id);
                $this->deleteImage($selected_certificate->image);
                $selected_certificate->delete();
            }
        }
        $data->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function deletes(MultiDelete $request)
    {
        try {
            // Get Inputs Data From Request
            $data = $request->validated();
            // Get Items Selected
            $items = $this->model->with('Products')->whereIn('id', $data['data'])->get();
            // Check If Not Have Count Items Or Check If User Delete Yourself
            if (!$items->count()) {
                return redirect()->back()->with('danger', 'يجب اختيار عنصر علي الافل');
            }
            // Get & Delete Data Selected
            foreach ($items as $row) {
                //check if there product inside brand ...
                if ($row->Products->count() > 0) {
                    return redirect()->back()->with('danger', 'لا يمكنك الحذف - يوجد بداخل العلامه التجاريه منتجات ');
                }
                $this->deleteImage($row->image);
                $this->deleteImage($row->cover);
                $certificates = BrandCertificate::where('brand_id', $row->id)->get();
                if ($certificates->count() > 0) {
                    foreach ($certificates as $certficate) {
                        $selected_certificate = BrandCertificate::findOrFail($certficate->id);
                        $this->deleteImage($selected_certificate->image);
                        $selected_certificate->delete();
                    }
                }
                $this->model->where('id', $row->id)->delete();
            }
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'لا يمكنك الحذف');
        }
    }

    public function uploadbrandsImage(Request $request)
    {
        $file = $request->file('dzfile');
        if ($file) {
            $image = $this->uploadImage($request->file('dzfile'), $this->image_path, $file);
        }
        return response()->json([
            'name' => $image,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function deletebrandsImage($id)
    {
        $data = BrandCertificate::findOrFail($id);
        //check if exists at least one image in table  ...
        if (BrandCertificate::where('brand_id', $data->brand_id)->count() > 1) {
            $this->deleteImage($data->image);
            $data->delete();
            return back()->with('success', 'تم حذف الصوره بنجاج');
        } else {
            return back()->with('danger', 'لا يمكن الحذف , لابد من وجود علي الاقل صوره واحده');
        }
    }
}
