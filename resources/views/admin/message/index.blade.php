@extends('layouts.admin')
@section('title','Book İmage List')
@section('content')
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Message List </h4>

                    </div>
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            <table id="row-select" class="display table table-borderd table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>subject</th>
                                    <th>message</th>
                                    <th>ip</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($messageList as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->message}}</td>
                                        <td>{{$rs->ip}}</td>
                                        <td>
       <a  class="btn btn-danger"  href="{{route('admin.messages.delete',['id' =>$rs->id])}}" onclick="return confirm ('Delete ! Are you sure')"><i class="fas fa-trash fa-xs mx-1"></i>Delete</a> </td>
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
@endsection
