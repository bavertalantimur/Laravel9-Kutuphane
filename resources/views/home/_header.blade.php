<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                @php
                $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Anasayfa</a></li>


                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Kitap Kategorileri</a>
                            <ul class="dropdown-menu">
                                @foreach($mainCategories as $category)
                                    @if(count($category->children))
                                        <li class="nav-item dropdown">
                                            <a
                                                class="nav-link dropdown-toggle"
                                                href="{{route('book_category',['id'=>$category->id])}}"
                                                id="dropdownMenuButton2"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >{{$category->title}}<i class="mx-1 fa-solid fa-caret-down"></i>
                                                <span class="sr-only">(current)</span></a
                                            >
                                            <div
                                                class="dropdown-menu"
                                                aria-labelledby="dropdownMenuLink_1"
                                            >
                                                @include('home.categorytree',['children'=>$category->children])
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('book_category',['id'=>$category->id])}}" >{{$category->title}}
                                                <span class="sr-only">(current)</span></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{route('contactus')}}">Contactus</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('references')}}">References</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">Faq</a></li>

                    </ul>


                    <ul class="nav-shop">
                        @auth()
                            <li  strong class="nav-item">{{Auth::user()->name}}</li>
                            <li  strong class="nav-item"><a class="nav-link" href="/logoutuser">Çıkış Yap</a></li>

                        @endauth
                        @guest()
                            <li class="nav-item  dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Üye İşlemleri</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="/loginuser">Giriş Yap</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/registeruser">Kayıt Ol</a></li>
                                </ul>
                            </li>
                            @endguest

                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>
