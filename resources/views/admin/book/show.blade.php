@extends('layouts.admin')
@section('title','Show:'.$data->title)
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <a href="/admin/book/edit/{{$data->id}}" class="m-3 btn  btn-primary">Edit</a>
                <a href="/admin/book/destroy/{{$data->id}}" onclick="return confirm ('Delete ! Are you sure')" class="m-3 btn  btn-danger">Delete</a>

                <div class="bootstrap-data-table-pane w-100 ">
                                <div class="table-responsive ">
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}


                                    <table id="row-select" class="display table bordered border border-2 table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{$data->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Category Id</th>
                                                <td>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                                </td>

                                            </tr>
                                            <tr>
                                                <th>Author Id</th>
                                                <td>{{$data->author_id}}</td>
                                            </tr>
                                            <tr>
                                                <th>User Id</th>
                                                <td>{{$data->user_id}}</td>
                                            </tr>
                                            <tr>
                                                <th>TITLE</th>
                                                <td>{{$data->title}}</td>
                                            </tr>

                                            <tr>
                                                <th>KEYWORDS</th>
                                                <td>{{$data->keywords}}</td>
                                            </tr>
                                            <tr>
                                                <th>DESCRIPTION</th>
                                                <td>{{$data->description}}</td>
                                            </tr>
                                            <tr>
                                                <th>Image</th>
                                                <td>{{$data->image}}</td>
                                            </tr>


                                            <tr>
                                                <th>Detail</th>
                                                <td>{{$data->detail}}</td>
                                            </tr>
                                            <tr>
                                                <th>Number Page</th>
                                                <td>{{$data->number_page}}</td>
                                            </tr>
                                            <tr>
                                                <th>Language</th>
                                                <td>{{$data->language}}</td>
                                            </tr>

                                            <tr>
                                                <th>Slug</th>
                                                <td>{{$data->slug}}</td>
                                            </tr>
                                            <tr>
                                                <th>Publishing Date</th>
                                                <td>{{$data->publishing_date}}</td>
                                            </tr>

                                            <tr>
                                                <th>STATUS</th>
                                                <td>{{$data->status}}</td>
                                            </tr>

                                            <tr>
                                                <th>Created at</th>
                                                <td>{{$data->created_at??"belirtilmedi"}}</td>
                                            </tr>
                                            <tr>
                                                <th>Updated at</th>
                                                <td>{{$data->updated_at}}</td>
                                            </tr>

                                        </thead>

                                    </table>
                                </div>
                            </div>
        </div>
    </div>
</div>
@endsection
