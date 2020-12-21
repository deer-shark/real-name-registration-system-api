@extends('covid.frontend.layouts.master')
@section('title','歡迎回來')
@section('content')
    <div class="container ct-s">
        <h3 class="data-h3">@yield('title')，請選擇活動</h3>
        <div class="list-group">
            <div class="list-group-item list-group-item-action" id="kskg-xmas20">
                <h5 class="overview-title">雄中雄女聯合耶誕晚會</h5>
                <div class="overview-summary">
                    <span class="badge badge-warning"><i class="far fa-clock"></i> 2020/12/25</span>
                    <span class="badge badge-info"><i class="far fa-map"></i> 高雄中學</span>
                    <span class="badge badge-secondary"><i class="far fa-map"></i> N/A人填報</span>
                </div>
                <hr>
                <div class="overview-action">
                    <a class="btn btn-primary" href="/"><i class="fas fa-home"></i> 進入首頁</a>
                    <a class="btn btn-info" href="/reg"><i class="far fa-edit"></i> 填報</a>
                    <a class="btn btn-success" href="/scan"><i class="fas fa-qrcode"></i> 掃入QR ID</a>
                    <a class="btn btn-secondary" href="/data"><i class="fas fa-tasks"></i> 填報資料管理</a>
                </div>
            </div>
            {{--
            <div class="list-group-item list-group-item-action" id="kskg-xmas20">
                <h5 class="overview-title">雄中雄女聯合耶誕晚會</h5>
                <div class="overview-summary">
                    <span class="badge badge-warning"><i class="far fa-clock"></i> 2020/12/25</span>
                    <span class="badge badge-info"><i class="far fa-map"></i> 高雄中學</span>
                    <span class="badge badge-secondary"><i class="far fa-map"></i> N/A人填報</span>
                </div>
                <hr>
                <div class="overview-action">
                    <a class="btn btn-primary" href="/kskg/xmas20"><i class="fas fa-home"></i> 進入首頁</a>
                    <a class="btn btn-info" href="/kskg/xmas20/reg"><i class="far fa-edit"></i> 填報</a>
                    <a class="btn btn-success" href="/kskg/xmas20/scan"><i class="fas fa-qrcode"></i> 掃入QR ID</a>
                    <a class="btn btn-secondary" href="/kskg/xmas20/data"><i class="fas fa-tasks"></i> 填報資料管理</a>
                </div>
            </div>
            <div class="list-group-item list-group-item-action" id="kskg-xmas20">
                <h5 class="overview-title">109學習歷程深談（南區）</h5>
                <div class="overview-summary">
                    <span class="badge badge-warning"><i class="far fa-clock"></i> 2020/12/27</span>
                    <span class="badge badge-info"><i class="far fa-map"></i> 高市三民高中</span>
                    <span class="badge badge-secondary"><i class="far fa-map"></i> N/A人填報</span>
                </div>
                <hr>
                <div class="overview-action">
                    <a class="btn btn-primary" href="/"><i class="fas fa-home"></i> 進入首頁</a>
                    <a class="btn btn-info" href="//reg"><i class="far fa-edit"></i> 填報</a>
                    <a class="btn btn-success" href="//scan"><i class="fas fa-qrcode"></i> 掃入QR ID</a>
                    <a class="btn btn-secondary" href="//data"><i class="fas fa-tasks"></i> 填報資料管理</a>
                </div>
            </div>
            <div class="list-group-item list-group-item-action" id="kskg-xmas20">
                <h5 class="overview-title">晚自習簽到系統</h5>
                <div class="overview-summary">
                    <span class="badge badge-warning"><i class="far fa-clock"></i> Everyday</span>
                    <span class="badge badge-info"><i class="far fa-map"></i> 高市三民高中</span>
                    <span class="badge badge-secondary"><i class="far fa-map"></i> N/A人填報</span>
                </div>
                <hr>
                <div class="overview-action">
                    <a class="btn btn-primary" href="/"><i class="fas fa-home"></i> 進入首頁</a>
                    <a class="btn btn-info" href="//reg"><i class="far fa-edit"></i> 填報</a>
                    <a class="btn btn-success" href="//scan"><i class="fas fa-qrcode"></i> 掃入QR ID</a>
                    <a class="btn btn-secondary" href="//data"><i class="fas fa-tasks"></i> 填報資料管理</a>
                </div>
                --}}
            </div>
        </div>
    </div>

@endsection
