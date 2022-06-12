@extends('layouts.admin')
@section('title','User detail')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="bootstrap-data-table-pane w-100 ">
                                <div class="table-responsive ">
                                    <table id="row-select" class="display table bordered border border-2 table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <td>{{$user->id}}</td>
                                        </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Roles</th>
                                                <td>
                                                    @foreach($user->roles as $role)
                                                        {{$role->name}}
                                                    @endforeach

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Add Role</td>
                                                <td>
                                                    <form action="{{route('admin.user.addrole',['id'=>$user->id])}}" method="post">
                                                        @csrf
                                                        <select class="form-control " name="role_id">
                                                            @foreach($roles as $role)
                                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <button type="submit" class="btn btn-primary mt-2">Add Role</button>
                                                    </form>
                                                </td>
                                            </tr>

                                        </thead>

                                    </table>
                                </div>
                            </div>
        </div>
    </div>
</div>
@endsection
