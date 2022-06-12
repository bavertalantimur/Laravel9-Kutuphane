@extends('layouts.admin')
@section('title','Book İmage List')
@section('content')
    <!-- /# row -->
    <div class="content-wrap">    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Message List </h4>

                    </div>
                    <div class="bootstrap-data-table-panel">
                        <a class="btn btn-primary" href="{{route('admin.faq.create')}}">ADD FAQ</a>

                        <div class="table-responsive">
                            <table id="row-select" class="display table table-borderd table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>question</th>
                                    <th>answer</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($faqList as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->question}}</td>
                                        <td>{{$rs->answer}}</td>
                                        <td>{{$rs->status}}</td>

                                        <td>
                                            <a  class="btn btn-danger"  href="{{route('admin.faq.delete',['id' =>$rs->id])}}" onclick="return confirm ('Delete ! Are you sure')"><i class="fas fa-trash fa-xs mx-1"></i>Delete</a>
                                            <a  class="btn btn-info"  href="{{route('admin.faq.edit',['id' =>$rs->id])}}"><i class="fas fa-trash fa-xs mx-1"></i>Edit</a> </td>
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

    </section>
    </div>
@endsection
