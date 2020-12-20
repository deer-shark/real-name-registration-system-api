@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '填報資料總覽')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <table id="table_register"></table>
    </div>
    <script>
        $(document).ready(function () {
            getRegisterList().then(data => {
                $('#table_register').bootstrapTable('load', data);
            });
        })
    </script>
    <style>
        footer {
            display:none;
        }
    </style>
@endsection
@endsection