@extends('layouts.admin')
@section('title','Category List')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>
                                <span>Categories</span>
                                <hr>
                            </h3>
                            <p>


                                <a href="{{route('admin_category')}}" type="button" class="btn btn-primary m-b-10 m-l-5">Add Category</a>
                            </p>


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
                                <li class="breadcrumb-item active">Book</li>
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
                        <div class="card">
                            <div class="card-title">
                                <h4>Book List </h4>

                            </div>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="row-select" class="display table table-borderd table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Category Id</th>
                                            <th>User Id</th>
                                            <th>Number Page</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>

                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                @endif
                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td>{{$rs->id}}</td>

                                            <td><a class="btn btn-info" href="{{route('admin_category_edit',['id' =>$rs->id])}}">Edit</a>
                                           <a class="btn btn-success"  href="{{route('admin_category_show',['id' =>$rs->id])}}">Show</a>
                                            <a  class="btn btn-danger"  href="{{route('admin_category_delete',['id' =>$rs->id])}}" onclick="return confirm ('Delete ! Are you sure')"><i class="fas fa-trash fa-xs mx-1"></i>Delete</a> </td>
                                        </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div id="extra-area-chart"></div>
                        <div id="morris-line-chart"></div>

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
    <!-- jquery vendor -->
    <script src="{{asset('assets')}}/admin/js/lib/jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="{{asset('assets')}}/admin/js/lib/menubar/sidebar.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <!-- bootstrap -->
    <script src="{{asset('assets')}}/admin/js/lib/bootstrap.min.js"></script><script src="{{asset('assets')}}/admin/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="{{asset('assets')}}/admin/js/lib/data-table/datatables.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/jszip.min.js"></script>
    <script src="{{asset('assets')}}/admin/lib/data-table/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/vfs_fonts.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/data-table/datatables-init.js"></script>





