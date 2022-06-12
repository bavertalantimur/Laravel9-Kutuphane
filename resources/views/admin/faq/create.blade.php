@extends('layouts.admin')
@section('title','Add FAQ')

@section('head')
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
                                <h4>Add Faq</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">

                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Book</li>
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
                                        <form action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Question</label>
                                                <input type="text" name="question" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Answer</label>
                                                <input type="text" name="answer" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected="selected">False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-default">Add Faq</button>
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
