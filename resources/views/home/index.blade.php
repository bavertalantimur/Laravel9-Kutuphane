@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('content')
    @include('home.main')
    @include('home.slider')

@endsection
