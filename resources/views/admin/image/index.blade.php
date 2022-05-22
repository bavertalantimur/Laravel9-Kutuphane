@extends('layouts.adminwindow')
@section('title','Book İmage List')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">

            <form action="{{route('admin.image.store',['bid'=>$book->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>{{$book->title}}</h2>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="title" >
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

                <button type="submit" class="btn btn-default">Upload</button>
            </form>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Book Image List </h4>

                            </div>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="row-select" class="display table table-borderd table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($images as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                @endif
                                            </td>
                                            <td>

                                            <a  class="btn btn-danger"  href="{{route('admin.image.destroy',['bid' =>$book->id,'id' =>$rs->id])}}" onclick="return confirm ('Delete ! Are you sure')"><i class="fas fa-trash fa-xs mx-1"></i>Delete</a> </td>
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




