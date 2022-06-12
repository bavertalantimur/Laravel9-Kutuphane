@extends('layouts.home')
@section('title',"Book By Category")
@section('content')
   <div class="container">
       <div class="row">


    @foreach($bookList as $book)
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="{{Storage::url($book->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> {{$book->title}}</h5>
                    <p class="card-text"> {{$book->description}}</p>
                </div>
                <div class="card-footer">
                    <a href="{{route('book',['id'=>$book->id])}}">Detay</a>
                </div>
            </div>
        </div>
    @endforeach
       </div>
   </div>

@endsection
