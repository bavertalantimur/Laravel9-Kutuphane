@extends('layouts.home')

@section('title', 'User Register ')
@section('content')
    <div class="col-sm-12">
     @include('auth.register')
    </div>
@endsection
