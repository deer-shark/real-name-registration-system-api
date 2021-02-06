@extends('covid.frontend.layouts.master')
@section('title', '填報資料總覽')
@section('content')
    <div class="container dashboard ct-s">
        <h3 class="data-h3">@yield('title')</h3>
        <table id="table_register"></table>
    </div>
    <script>
        $(document).ready(function () {
            getRegisterList().then(data => {
                $('#table_register').bootstrapTable('load', data);
            });
        })
    </script>
@endsection
