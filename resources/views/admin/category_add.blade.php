@extends('layouts.admin')
@section('title','admin panel home page')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h4>Add Category</h4>
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
                                <li class="breadcrumb-item active">Add Category</li>
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
                                <h4>Basic Form</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_category_create')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Parent</label>
                                            <select class="form-control" name="parent_id">
                                                <option value="0" selected="selected">Ana Category</option>
                                                @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Keyword</label>
                                            <input type="text" name="keyword" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="description" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>



                                        <button type="submit" class="btn btn-default">Add Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <p>2018 © Admin Board. -
                                <a href="#">example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
