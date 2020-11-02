<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <title>@yield('title')－實名制填報系統</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css">
    <link href="{{ asset('covid19/resources/main/style.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

</head>

<body>
    @include('covid.frontend.layouts.header')
    @include('covid.frontend.layouts.navbar')
    <div class="ct">
        @yield('content')
    </div>
    @include('covid.frontend.layouts.footer')
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
</html>