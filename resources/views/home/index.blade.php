@extends('layouts.home')

@section('title','Kütüphane Sitesi')

@section('content')
    @include('home.main')
    @include('home.slider')
    @include('home.category')

@endsection
