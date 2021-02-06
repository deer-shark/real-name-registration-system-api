@extends('covid.frontend.layouts.master')
@section('title', '一般身分填報')
@section('content')
    <div class="container ct-s">
        <h3 class="data-h3">@yield('title')</h3>
        <form action="{{ route('post.form.normal') }}" method="POST">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="time"><i class="far fa-clock"></i> 時間</label>
                        <input type="text" class="form-control disable" id="time" placeholder="系統自動填入，請勿更動" disabled>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="location"><i class="fas fa-location-arrow"></i> 地點</label>
                        <input type="text" class="form-control disable" id="location" placeholder="系統自動填入，請勿更動"
                               disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="name"><i class="far fa-user"></i> 姓名</label>
                        <input type="text" class="form-control" id="name" placeholder="姓名" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="identify"><i class="far fa-id-card"></i> 身分證字號</label>
                        <input type="text" class="form-control" id="identify" placeholder="身分證字號" required
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="phone"><i class="fas fa-mobile-alt"></i> 聯絡電話</label>
                        <input type="text" class="form-control" id="phone" placeholder="聯絡電話" required
                               autocomplete="off">
                    </div>
                </div>
            </div>
            {{--  <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="temperature"><i class="fas fa-thermometer-half"></i> 體溫</label>
                        <input type="text" class="form-control" id="temperature" placeholder="體溫" autocomplete="off">
                    </div>
                </div>
            </div>  --}}
            <div class="form-group">
                <label for="note"><i class="far fa-sticky-note"></i> 備註</label>
                <textarea class="form-control is-invalid" id="note" placeholder="備註"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i></button>
        </form>
    </div>

@endsection
