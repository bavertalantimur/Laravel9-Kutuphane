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


                                <a href="{{route('admin_category_add')}}" type="button" class="btn btn-primary m-b-10 m-l-5">Add Category</a>
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
                                <li class="breadcrumb-item active">Category</li>
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
                                <h4>Category List </h4>

                            </div>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="row-select" class="display table table-borderd table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->parent_id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_category_edit',['id' =>$rs->id])}}">Edit</a> </td>
                                            <td> <a href="{{route('admin_category_delete',['id' =>$rs->id])}}" onclick="return confirm ('Delete ! Are you sure')">Delete</a> </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </tfoot>
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
                        @foreach($datalist as $rs)
                            <p>{{$rs->title}}</p>
                        @endforeach
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




