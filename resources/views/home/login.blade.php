@extends('layouts.home')

@section('title', 'User Login ')
@section('content')
    <div class="col-sm-12">
     @include('auth.login')
    </div>
@endsection
