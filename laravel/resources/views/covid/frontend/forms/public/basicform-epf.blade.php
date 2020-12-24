@extends('covid.frontend.layouts.master')
@section('title', '一般身分填報')
@section('content')
    <div class="container ct-s">
        <h3 class="data-h3">@yield('title')</h3>
        <form id="form-register">
            <div class="card">
                <div class="card-header text-white bg-success">
                    <i class="fas fa-user-shield"></i> 個人資料
                </div>
                <div class="card-body">
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
                                <label for="form-register-school"><i class="fas fa-school"></i> 單位</label>
                                <select id="form-register-school" class="form-control" autocomplete="off">
                                    <option value="" disabled selected>請選擇學校</option>
                                    <option value="KGHS">雄女 KGHS</option>
                                    <option value="KSHS">雄中 KSHS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="form-register-school"><i class="fas fa-school"></i> 身分別</label>
                                <select id="form-register-idgroup" class="form-control" autocomplete="off">
                                    <option value="" disabled selected>請選擇學校</option>
                                    <option value="KGHS">學生</option>
                                    <option value="KSHS">帶隊老師</option>
                                    <option value="KSHS">教授</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="name"><i class="far fa-user"></i> 姓名</label>
                                <input type="text" class="form-control" id="stu-name" placeholder="姓名" autocomplete="off">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header bg-warning">
                    <i class="fas fa-notes-medical"></i> 健康聲明書
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="time">1. 一個月內，您是否曾出國？</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">否</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">是</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i></button>
        </form>
    </div>

@endsection
