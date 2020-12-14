@extends('covid.frontend.layouts.master')
@section('title', '一般身分填報 KSKG')
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
                    <input type="text" class="form-control disable" id="location" placeholder="系統自動填入，請勿更動" disabled>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="school"><i class="fas fa-school"></i> 學校</label>
                    <select id="school" class="form-control" required autocomplete="off">
                        <option value="" disabled selected>請選擇學校</option>
                        <option value="kshs">雄中 KSHS</option>
                        <option value="kghs">雄女 KGHS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="identify"><i class="far fa-id-card"></i> 學號</label>
                    <input type="text" class="form-control" id="identify" placeholder="學號" required autocomplete="off">
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="phone"><i class="far fa-map"></i> 班級</label>
                    <input type="text" class="form-control" id="phone" placeholder="班級" required autocomplete="off">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="phone"><i class="fas fa-chair"></i> 座號</label>
                    <input type="text" class="form-control" id="phone" placeholder="座號" required autocomplete="off">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="name"><i class="far fa-user"></i> 姓名</label>
                    <input type="text" class="form-control" id="name" placeholder="姓名" required autocomplete="off">
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
        <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i></button>
    </form>
</div>

@endsection