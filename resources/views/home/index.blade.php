@extends('layouts.home')

@section('title','Talantimur Kütüphanesi')

@section('content')
    @include('home.main')
    @include('home.slider')
    @include('home.category')
    @include('home.offer')
    @include('home.popular')
    @include('home.blog')
    @include('home.subscribe')

@endsection
