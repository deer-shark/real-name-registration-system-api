@extends('covid.frontend.layouts.master')
@section('title', '一般身分填報 KSKG')
@section('content')
    <div class="container ct-s">
        <h3 class="data-h3">@yield('title')</h3>
        <form id="form-register">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-time"><i class="far fa-clock"></i> 時間</label>
                        <input type="text" class="form-control disable" id="form-register-time"
                               placeholder="系統自動填入，請勿更動" disabled value="2020/12/25">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-localtion"><i class="fas fa-location-arrow"></i> 地點</label>
                        <input type="text" class="form-control disable" id="form-register-localtion"
                               placeholder="系統自動填入，請勿更動" disabled value="高雄中學">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-school"><i class="fas fa-school"></i> 學校</label>
                        <select id="form-register-school" class="form-control" autocomplete="off">
                            <option value="" disabled selected>請選擇學校</option>
                            <option value="KGHS">雄女 KGHS</option>
                            <option value="KSHS">雄中 KSHS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-studentid"><i class="far fa-id-card"></i> 學號</label>
                        <input type="text" class="form-control" id="form-register-studentid" placeholder="學號"
                               autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-class"><i class="far fa-map"></i> 班級(含年級如101)</label>
                        <input type="text" class="form-control" id="form-register-class" placeholder="班級"
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-seat"><i class="fas fa-chair"></i> 座號</label>
                        <input type="number" min="1" class="form-control" id="form-register-seat" placeholder="座號"
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="form-register-name"><i class="far fa-user"></i> 姓名</label>
                        <input type="text" class="form-control" id="form-register-name" placeholder="姓名"
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
            <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i></button>
        </form>
    </div>

@endsection
