@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '現場掃入QR')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <div class="row">
            <div class="camera">
                @include('covid.frontend.api.instacam')
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkbb">
                會觸發的東東
            </button>
        </div>
    </div>
    <div class="modal fade" id="checkbb" tabindex="-1" role="dialog" aria-labelledby="checkbb" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('post.form.stu-card') }}" method="POST" class="stu-in">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="data-h3 modal-title"><i class="fas fa-id-card-alt"></i> 082152 陳芳同</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="jumbotron" style="padding-top:25px;padding-bottom:25px;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label><i class="far fa-user"></i> 學生證照片</label>
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('covid19/resources/main/images/avr-dafault.png') }}"
                                                 class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="class"><i class="far fa-map"></i> 班級</label>
                                                <input type="text" class="form-control" id="class" placeholder="班級"
                                                       required autocomplete="off" disabled>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="seat"><i class="fas fa-chair"></i> 座號</label>
                                                <input type="text" class="form-control" id="seat" placeholder="座號"
                                                       required autocomplete="off" disabled>
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
                                    <input type="text" class="form-control disable" id="location"
                                           placeholder="系統自動填入，請勿更動" disabled>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">不予認證</button>
                        <button type="submit" class="btn btn-primary">確認簽到</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@endsection
