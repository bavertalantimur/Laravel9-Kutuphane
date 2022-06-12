<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <h2>Kitap <span class="section-intro__style">Türleri</span></h2>
        </div>
        <div class="row">

                @foreach($categorydata as $rs)
                <div class="col-md-3 col-lg-4 col-xl-3 ">
                <div class="card text-center card-product ">
                    <div class="card-product__img">
                        @if($rs->image)
                        <img class="card-img" src="{{Storage::url($rs->image)}}" style=" height: 160px">
                        @endif
                        <ul class="card-product__imgOverlay">
                            <li><a href="{{route('book_category',['id'=>$rs->id])}}" class="bg-primary px-3 py-2 text-white"><i class="ti-search"></i>Detail</a></li>

                        </ul>
                    </div>
                    <div class="card-body">

                        <h4 class="card-product__title"><a href="single-product.html">{{$rs->title}}</a></h4>

                    </div>
                </div>
                </div>
                @endforeach


+
        </div>
    </div>


</section>
<!-- ================ trending product section end ================= -->
