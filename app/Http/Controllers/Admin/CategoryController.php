<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $appends = [
        'getParentsTree'
    ];
    public static function getParentsTree($category,$title)
    {
        if ($category->parent_id==0)
        {
            return $title ;
        }
        $parent=Category::find($category->parent_id);
        $title=$parent->title . '>' . $title;
        return CategoryController::getParentsTree($parent,$title);

    }

    public function index()
    {

        $datalist = DB::select('select * from  categories');


        return view('admin.category', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     ** @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $datalist=Category::all();
        return view('admin.category_add',
        ['datalist'=>$datalist]);

    }
    public function add()
    {
        $datalist = DB::table('categories')->get();

        return view('admin.
        category_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=new Category();

        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords =$request->input('keywords');
        $data->description =$request->input('description');
        $data->status =$request->input('status');
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin_category');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        $data=Category::find($id);
        return view('admin.category_show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $data=Category::find($id);
        $datalist = DB::table('categories')->get();

        return view('admin.category_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {

        $data=Category::find($id);

        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords =$request->input('keywords');
        $data->description =$request->input('description');
        $data->status =$request->input('status');
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $data=Category::find($id);


        Storage::delete($data->image);
        $data->delete();
        return redirect()->route('admin_category');
    }
}

