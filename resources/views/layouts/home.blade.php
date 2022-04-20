<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('css')
    @yield('js')
</head>
<body>

<div class="jumbotorn text-center">
    <h1>Header</h1>
    <p>Resize this responsive page to see the effect!</p>
    <a href="/">Home</a>
    <a href="/aboutus">Aboutus</a>
    @yield('header')
</div>

<div class="container mt-5">
    <div class="row">
        @yield('sidebar')
        @yield('content')

    </div>
</div>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>My Footor</h1>
    <p>sayfa altı</p>
    @yield('footer')
</div>
</body>
</html>
