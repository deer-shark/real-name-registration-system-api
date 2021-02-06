@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '所有刷入紀錄')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <table id="table_checkin"></table>
    </div>
    <script>
        $(document).ready(function () {
            getHistoryList().then(data => {
                $('#table_checkin').bootstrapTable('load', data);
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