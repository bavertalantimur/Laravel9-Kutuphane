@extends('layouts.admin')
@section('title','User List')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">

            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>User  List </h4>

                            </div>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="row-select" class="display table table-borderd table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>@foreach($rs->roles as $role)
                                                    {{$role->name}}
                                                @endforeach

                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td>
                                                <a  class="btn btn-danger"  href="{{route('admin.user.show',['id'=>$rs->id])}}" ><i class="fa-solid fa-eye"></i>Show</a>
                                            <a class="btn btn-danger"  href="" onclick="return confirm ('Delete ! Are you sure')"><i class="fas fa-trash fa-xs mx-1"></i>Delete</a> </td>

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




