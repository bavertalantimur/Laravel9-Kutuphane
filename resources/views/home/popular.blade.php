<!-- ================ Best Selling item  carousel ================= -->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>En çok tercih edilen kitaplara bakmak ister misiniz ?</p>
            <h2> <span class="section-intro__style">Popüler</span> Kitaplar</h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">
            @foreach($sliderdata as $rs)
                <div class="card text-center card-product">

                    <div class="card-product__img">
                        @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" class="img-fluid" style=" height: 360px">
                        @endif
                        <ul class="card-product__imgOverlay">
                            <li><button><i class="ti-search"></i></button></li>
                            <li><button><i class="ti-shopping-cart"></i></button></li>
                            <li><button><i class="ti-heart"></i></button></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h4 class="card-product__title"><a href="single-product.html">{{$rs->title}}</a></h4>

                    </div>

                </div>
            @endforeach




        </div>
    </div>
</section>
<!-- ================ Best Selling item  carousel end ================= -->
