<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',"No Title")</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Baver Talantimur">
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
</head>
<body>
@include('home._header')
<main class="site-main">
    @section('content')
    @show
</main>
@include('home._footer')
</body>
</html>
