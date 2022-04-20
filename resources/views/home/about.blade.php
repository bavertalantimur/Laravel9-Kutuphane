@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
      @parent  <p>//parentsilinirse anasayfadan hiç bişey gelmez</p>

    <p>Sub page data</p>
@endsection

@section('content')
    @parent
    <p>This is my body content.</p><br>
    aaaaaaa<br>
    bbbbbb<br>
@endsection
