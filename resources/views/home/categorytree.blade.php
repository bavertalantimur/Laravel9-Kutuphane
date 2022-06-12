@foreach($children as $subcategory)
    @if(count($subcategory->children))
        <h6> <a class="dropdown-item" href="{{route('book_category',['id'=>$subcategory->id])}}"><strong>{{$subcategory->title}}</strong></a></h6>
        @include('home.categorytree',['children' => $subcategory->children])
    @else
        <a class="dropdown-item" href="{{route('book_category',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a>
    @endif
@endforeach
