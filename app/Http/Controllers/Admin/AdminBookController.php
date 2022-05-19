<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $data =Book::all();


        return view('admin.book.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     ** @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.book.create',['data'=>$data]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=new Book();

        $data->category_id = $request->category_id;
        $data->user_id =0;
        $data->author_id = $request->author_id;
        $data->title = $request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->detail = $request->detail;
        $data->number_page = $request->number_page;
        $data->language = $request->language;
        $data->publishing_date = $request->publishing_date;
        $data->status =$request->status;

        $data->slug = $request->slug;
        $data->save();
        return redirect('admin/book');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book,$id)
    {
        $data=Book::find($id);
        return view('admin.book.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book,$id)
    {
        $data=Book::find($id);
        $datalist=Category::all();
        return view('admin.book.edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book,$id)
    {

        $data=Book::find($id);

        $data->category_id = $request->category_id;
        $data->user_id =0;
        $data->author_id = $request->author_id;
        $data->title = $request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->detail = $request->detail;
        $data->number_page = $request->number_page;
        $data->language = $request->language;
        $data->publishing_date = $request->publishing_date;
        $data->status =$request->status;

        $data->slug = $request->slug;



        $data->save();
        return redirect('admin/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book,$id)
    {
        $data=Book::find($id);


        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/book');
    }
}
