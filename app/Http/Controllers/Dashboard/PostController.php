<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\General\MultiDelete;
use App\Http\Requests\CategoryRequest;
use App\DataTables\PostDataTable;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends GeneralController
{
    protected $viewPath = 'dashboard.post';
    protected $path = 'posts';
    private $route = 'posts';
    protected $paginate = 30;

    public function __construct(Post $model)
    {
        parent::__construct($model);
    }
    public function old_index(PostDataTable $dataTable, $type)
    {
        return $dataTable->with('type', $type)->render($this->viewPath . '.index');
    }
    public function index($type)
    {
        $data = Post::where('type', $type)->orderBy('id', 'desc')->paginate(5);
        return view($this->viewPath . '.index',compact('data'));
    }

    public function create($type)
    {
        $category = Category::where('parent_id', null)->get();
        return view($this->viewPath . '.create', compact('category', 'type'));
    }

    public function get_subcategory($id,$type)
    {
        $data = Category::where('type',$type)->where('parent_id', $id)->get();
        return view('dashboard.post.parts.subCategories', compact('data'));
    }

    public function store(PostRequest $request)
    {

        $data = $request->validated();
        //generate category id
        if ($request->sub_sub_category_id != null) {
            $data['category_id'] = $request->sub_sub_category_id;
        } elseif ($request->sub_category_id != null) {
            $data['category_id'] = $request->sub_category_id;
        } elseif ($request->category_id != null) {
            $data['category_id'] = $request->category_id;
        }
        unset($data['sub_category_id']);
        unset($data['sub_sub_category_id']);
        $this->model::create($data);
        return response()->json(['success'=>'You have successfully upload file.']);


        return redirect()->route($this->route . '.index', ['type' => $data['type']])->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        $category = Category::where('parent_id', null)->get();

        //generate category tree
        $selected_category = Category::findOrFail($data->category_id);

        $first_cat_id = null;
        $second_cat_id = null;
        $third_cat_id = null;

        if ($selected_category) {
            if ($selected_category->Parent->parent_id == null) {
                $first_cat_id = $selected_category->parent_id;
                $second_cat_id = $selected_category->id;
                $third_cat_id = null;
            } else {
                $first_cat_id = $selected_category->Parent->parent_id;
                $second_cat_id = $selected_category->parent_id;
                $third_cat_id = $selected_category->id;
            }
        }
        //generate sub category data ...
        $sub_category = Category::where('type',$data->type)->where('parent_id', $first_cat_id)->get();

        //generate sub sub category data ...
        $sub_sub_category = Category::where('type',$data->type)->where('parent_id', $second_cat_id)->get();
        $type = $data->type;
        return view($this->viewPath . '.edit', compact('data', 'category', 'first_cat_id', 'second_cat_id', 'third_cat_id', 'sub_category', 'sub_sub_category','type'));
    }

    public function update(PostRequest $request, $id)
    {
        $data = $request->validated();

        //generate category id
        if ($request->sub_sub_category_id != null) {
            $data['category_id'] = $request->sub_sub_category_id;
        } elseif ($request->sub_category_id != null) {
            $data['category_id'] = $request->sub_category_id;
        } elseif ($request->category_id != null) {
            $data['category_id'] = $request->category_id;
        }
        unset($data['sub_category_id']);
        unset($data['sub_sub_category_id']);
        if($request->image){
            if (is_file($request->image)) {
                $img_name = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads/posts/'), $img_name);
                $data['image'] = $img_name;
            }
        }
        $this->model::where('id', $id)->update($data);
        return redirect()->route($this->route . '.index', ['type' => $data['type']])->with('success', 'تم التعديل بنجاح');

    }

    public function delete($id)
    {
        try {
            $data = $this->model::findOrFail($id);
            //File::delete($data->image);
            $data->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->with('danger', 'لا يمكن الحذف لوجود فيديوهات بالقسم المختار');
        }
    }

    public function deletes(MultiDelete $request)
    {
        try {
            // Get Inputs Data From Request
            $data = $request->validated();
            // Get Items Selected
            $items = $this->model->whereIn('id', $data['data'])->get();
            // Check If Not Have Count Items Or Check If User Delete Yourself
            if (!$items->count()) {
                return redirect()->back()->with('danger', 'يجب اختيار عنصر علي الافل');
            }
            //check brand used city
            foreach ($items as $row) {
                $this->model->where('id', $row->id)->delete();
            }
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'لا يمكنك الحذف');
        }
    }

    public function change_free(Request $request)
    {
        $data['free'] = $request->status;
        $user = Post::where('id', $request->id)->update($data);
        return 1;
    }
}
