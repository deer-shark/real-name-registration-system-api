<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>@yield('title')－{{ config('event.string.'.env('EVENT','default').'.banner_title') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('title')－實名制填報系統">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css">
    <link href="{{ asset('covid19/resources/main/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('covid19/resources/main/bsstyle.css') }}" rel="stylesheet"> --}}
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/jwt-decode@1.5.1/build/jwt-decode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.7/dayjs.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.js"></script>
    <script src="{{ asset('covid19/resources/main/js/bootstrap-table-zh-TW.js') }}" type="text/javascript"></script>
    {{-- <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" type="text/javascript"></script> --}}
    <script src="{{ asset('covid19/resources/main/js/instascan.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('covid19/resources/main/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('covid19/resources/main/js/jquery.barcode.js') }}" type="text/javascript"></script>
    <script src="{{ asset('covid19/resources/main/js/jquery.qrcode.js') }}" type="text/javascript"></script>
    <script src="{{ asset('covid19/resources/main/function/api.js') }}" type="text/javascript"></script>
    <script src="{{ asset('covid19/resources/main/function/config.js') }}" type="text/javascript"></script>
    <script src="{{ asset('covid19/resources/main/function/main.js') }}" type="text/javascript"></script>
    <meta property="og:locale" content="zh_TW"/>
    <meta http-equiv="pragma" content="no-cache">
    <meta name="author" content="">
    <meta name="robots" content="noindex,nofollow">
    <!-- icons -->
    <meta property="og:image" content="https://img.imych.one/rnrs/kskg/xmas20/register.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://me.imych.one/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="https://img.imych.one/me/images/youu.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://img.imych.one/me/images/youu.png">
    <style>
        section.header .banner {
            /* background:url("
        {{ asset('covid19/resources/main/images/DSC_3242.jpg') }} ") gray no-repeat center; */
            /* background-size: cover; */
            /* filter: blur(4px); */
        }
    </style>
    <script>
        var config;
        $.ajax({
            url: "{{ asset('covid19/resources/main/function/config.json') }}",
            type: "POST",
            async: false,
            success: function (msg) {
                config = msg;
            },
            error: function (xhr) {
                console.log('ajax er');
                Swal.fire({
                    title: "操作確認",
                    text: "您所輸入的序號不存在或是系統被玩壞了!", //訊息內容(可省略)
                    icon: "error", //圖示(可省略) success/info/warning/error/question
                    showCancelButton: true
                    //圖示範例：https://sweetalert2.github.io/#icons
                });
            }
        });
    </script>

</head>

<body>
@include('covid.frontend.layouts.header')
<div class="ct">
    @yield('content')
</div>
@include('covid.frontend.layouts.footer')
</body>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        init();
    });
</script>
</html>
