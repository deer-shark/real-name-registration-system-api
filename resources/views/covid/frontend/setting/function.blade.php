@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '功能管理')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">功能名稱</th>
                    <th scope="col">啟用狀態</th>
                    <th scope="col">備註說明</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">體溫登記欄位</th>
                    <td>
                        <div class="custom-control custom-switch function">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">整合票券</th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">事前資料填報</th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">通行證查詢</th>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endsection
