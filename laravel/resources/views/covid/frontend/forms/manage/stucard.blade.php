@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '現場刷入學生證')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{ route('post.form.stu-card') }}" method="POST" class="stu-in">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="time"><i class="far fa-clock"></i> 時間</label>
                                <input type="text" class="form-control disable" id="time" placeholder="系統自動填入，請勿更動"
                                       disabled>
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
                                <label for="identify"><i class="fas fa-id-card-alt"></i> 學生證編號</label>
                                <input type="text" class="form-control" id="identify" placeholder="學生證編號" required
                                       autofocus autocomplete="off" maxlength="10">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="temperature"><i class="fas fa-thermometer-half"></i> 體溫</label>
                                <input type="text" class="form-control" id="temperature" placeholder="體溫"
                                       autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note"><i class="far fa-sticky-note"></i> 備註</label>
                        <textarea class="form-control is-invalid" id="note" placeholder="備註"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i>
                    </button>
                </form>
                <hr>
                <div class="container stu-in">
                    <div class="row">
                        <div class="alert alert-success">
                            <i class="fas fa-id-card-alt"></i> 082152 陳芳同 <span class="text-dark">已在 20201105 19:32:59 刷入，體溫35.7度</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="alert alert-danger">
                            <i class="fas fa-id-card-alt"></i> 081085 高勇成 <span class="text-dark">已在 20201105 19:30:31 刷入，體溫未量測</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="jumbotron">
                    <h1 class="data-h3"><i class="fas fa-id-card-alt"></i> 082152 陳芳同</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label><i class="far fa-user"></i> 學生照片</label>
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('covid19/resources/main/images/avr-dafault.png') }}"
                                         class="img-fluid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-barcode"></i> 學生證條碼</label>
                                <div class="d-flex justify-content-center">
                                    <div class="form-group">
                                        <span class="barcode">082152</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="class"><i class="far fa-map"></i> 班級</label>
                                        <input type="text" class="form-control" id="class" placeholder="班級" required
                                               autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="seat"><i class="fas fa-chair"></i> 座號</label>
                                        <input type="text" class="form-control" id="seat" placeholder="座號" required
                                               autocomplete="off" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="temperature"><i class="fas fa-thermometer-half"></i> 體溫</label>
                                        <input type="text" class="form-control" id="temperature" placeholder="體溫"
                                               autocomplete="off" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="note"><i class="far fa-sticky-note"></i> 備註</label>
                                <textarea class="form-control is-invalid" id="note" placeholder="備註"
                                          disabled></textarea>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
