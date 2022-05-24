@extends('layouts.admin')
@section('title','Edit Book')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection
@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h4>Edit Book</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">

                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Book</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">

                            <div id="extra-area-chart"></div>
                            <div id="morris-line-chart"></div>
                            <div class="card">
                                <div class="card-title">
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{route('admin.book.update',['id' =>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category_id">

                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}" @if($rs->id==$data->category->id) selected @endif> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Author Id</label>
                                                <input type="text" name="author_id" value="{{$data->author_id}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>User Id</label>
                                                <input type="text" name="user_id" value="{{$data->user_id}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Desciription:</label>
                                                <textarea class="form-control" rows="5" name="description" id="description" >{{$data->description}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFile">Image</label>
                                                <div class="input-group">
                                                    <div class="input-group">
                                                        <input type="file" class="custom-file-input "name="image">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="detail">Detail:</label>
                                                    <textarea class="form-control" rows="5" name="detail" id="detail" >{{$data->detail}}</textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create( document.querySelector( '#detail' ) )
                                                            .then( editor => {
                                                                console.log( editor );
                                                            } )
                                                            .catch( error => {
                                                                console.error( error );
                                                            } );
                                                    </script>
                                                </div>

                                            <div class="form-group">
                                                <label>Number of pages</label>
                                                <input type="text" name="number_page" value="{{$data->number_page}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Languages</label>
                                                <input type="text" name="language" value="{{$data->language}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Publising Date</label>
                                                <input type="date" name="publishing_date" value="{{$data->publishing_date}}" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status" value="{{$data->status}}">
                                                    <option selected="selected">False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-default">Update Book</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function (){
            $('.textarea').summernote()
        })
    </script>
@endsection
