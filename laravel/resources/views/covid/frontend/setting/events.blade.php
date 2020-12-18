@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '活動管理')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <form action="{{ route('post.form.auth-card') }}" method="POST">
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
                        <label for="identify"><i class="far fa-id-badge"></i> 識別編號</label>
                        <input type="text" class="form-control" id="identify" placeholder="識別證編號" required autofocus
                               autocomplete="off" mixlength="10" maxlength="10">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="temperature"><i class="fas fa-thermometer-half"></i> 體溫</label>
                        <input type="text" class="form-control" id="temperature" placeholder="體溫" autocomplete="off"
                               required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="note"><i class="far fa-sticky-note"></i> 備註</label>
                <textarea class="form-control is-invalid" id="note" placeholder="備註"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i></button>
        </form>
    </div>
@endsection
@endsection
