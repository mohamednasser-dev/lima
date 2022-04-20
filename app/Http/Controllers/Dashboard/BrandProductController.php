<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\BrandProductRequest;
use App\Http\Requests\General\MultiDelete;
use App\Models\BrandProduct;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class BrandProductController extends GeneralController
{
    protected $viewPath = 'brand.product';
    protected $path = 'products';
    private $route = 'brand_products';
    private $image_path = 'products';
    protected $paginate = 30;

    public function __construct(BrandProduct $model)
    {
        parent::__construct($model);
    }

    public function show($id)
    {
        $data = BrandProduct::where('brand_id', $id)->orderBy('created_at','desc')->paginate(20);
        return view('dashboard.' . $this->viewPath . '.index', compact('data', 'id'));
    }

    public function details($id)
    {
        $data = $this->model::findOrFail($id);
        return view('dashboard.' . $this->viewPath . '.details', compact('data'));
    }
    public function search(Request $request) {
        $queryString = $request->text;
        $data = $this->model::where('title_ar', 'Like',"%$queryString%")->orWhere('title_en', 'Like','%'. $request->text.'%')->paginate(20);
        $id=$request->id;

        return view('dashboard.' . $this->viewPath . '.parts.producSearch', compact('data','id'));
    }

    public function create($id)
    {
        return view('dashboard.' . $this->viewPath . '.create', compact('id'));
    }

    public function store(BrandProductRequest $request)
    {
        $data = $request->validated();
        if($request->discount == null){
            $data['discount'] = 0;
        }
        unset($data['_token']);
        if ($request->image) {
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->file('image'), $this->image_path);
            }
        } else {
            unset($data['image']);

        }
        unset($data['rows']);
        $product = $this->model::create($data);
        if ($request->rows) {
            foreach ($request->rows as $row) {
                if ($row['title_ar'] != null && $row['title_en'] != null && $row['content_ar'] != null && $row['content_en'] != null) {
                    $row['product_id'] = $product->id;
                    ProductDetail::create($row);
                }
            }
        }
        return redirect()->route($this->route, $request->brand_id)->with('success', 'تم الاضافه بنجاح');
    }


    public function edit($id)
    {
        $data = $this->model::with('Details')->findOrFail($id);
        return view('dashboard.' . $this->viewPath . '.edit', compact('data'));
    }

    public function update(BrandProductRequest $request, $id)
    {
        $data = $request->validated();
        $item = $this->model->find($id);
        unset($data['_token']);
        if ($request->image) {
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->file('image'), $this->image_path, $item->image);
                $this->deleteImage($item->image);
            }
        } else {
            unset($data['image']);
        }
        unset($data['rows']);
        $this->model::where('id', $id)->update($data);
        if ($request->rows) {
            $exists_details = ProductDetail::where('product_id', $id)->first();
            if ($exists_details) {
                ProductDetail::where('product_id', $id)->delete();
            }
            foreach ($request->rows as $row) {
                if ($row['title_ar'] != null && $row['title_en'] != null && $row['content_ar'] != null && $row['content_en'] != null) {
                    $row['product_id'] = $id;
                    ProductDetail::create($row);
                }
            }
        }else{
            $exists_details = ProductDetail::where('product_id', $id)->first();
            if ($exists_details) {
                ProductDetail::where('product_id', $id)->delete();
            }
        }
        return redirect()->route($this->route, $item->brand_id)->with('success', 'تم التعديل بنجاح');

    }

    public function delete($id)
    {
        $data = $this->model::findOrFail($id);
        $this->deleteImage($data->image);
        $data->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function deletes(MultiDelete $request)
    {
        try {
            // Get Inputs Data From Request
            $data = $request->validated();
            // Get Items Selected
            $items = $this->model->whereIn('id', $data['data']);
            // Check If Not Have Count Items Or Check If User Delete Yourself
            if (!$items->count()) {
                return redirect()->back()->with('danger', 'يجب اختيار عنصر علي الافل');
            }

            // Get & Delete Data Selected
            $items->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {

            return redirect()->back()->with('danger', 'لا يمكنك الحذف');
        }
    }

}
