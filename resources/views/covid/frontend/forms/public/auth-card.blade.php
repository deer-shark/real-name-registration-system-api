@extends('covid.frontend.layouts.master')
@section('title', '一般填報認證畫面')
@section('content')
    <div class="container">
        <main role="main" class="container">
            <div class="jumbotron">
                <h1 class="data-h3"><i class="far fa-id-badge"></i> xxx活動通行證</h1>
                {{--  <p class="lead d-flex justify-content-center">抵達活動現場時，請出示本通行證及相關證件，以利工作人員查驗。</p>  --}}
                {{-- <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="time"><i class="far fa-clock"></i> 時間</label>
                            <input type="text" class="form-control disable" id="time" placeholder="系統自動填入，請勿更動" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="location"><i class="fas fa-location-arrow"></i> 地點</label>
                            <input type="text" class="form-control disable" id="location" placeholder="系統自動填入，請勿更動" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name"><i class="far fa-user"></i> 姓名</label>
                            <input type="text" class="form-control" id="name" placeholder="姓名" required autocomplete="off" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="identify"><i class="far fa-id-card"></i> 身分證字號</label>
                            <input type="text" class="form-control" id="identify" placeholder="身分證字號" required autocomplete="off" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-mobile-alt"></i> 聯絡電話</label>
                            <input type="text" class="form-control" id="phone" placeholder="聯絡電話" required autocomplete="off" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="temperature"><i class="fas fa-thermometer-half"></i> 體溫</label>
                            <input type="text" class="form-control" id="temperature" placeholder="體溫" autocomplete="off" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="note"><i class="far fa-sticky-note"></i> 備註</label>
                    <textarea class="form-control is-invalid" id="note" placeholder="備註" disabled ></textarea>
                </div>
                --}}
                <div class="row">
                    {{-- <div class="col">
                        <div class="form-group">
                            <label for="time"><i class="fas fa-barcode"></i> 逼逼條碼</label><br>
                            <div class="d-flex justify-content-center">
                                <svg id="barcode" width="100%"></svg>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col">
                        <div class="form-group">
                            {{-- <label for="location"><i class="fas fa-qrcode"></i> 掃掃條碼</label><br> --}}
                            <div id="qrcode" class="d-flex justify-content-center"></div>
                        </div>
                    </div>
                </div>
                <p class="lead d-flex justify-content-center">請妥善保存您的 QR Code 以供入場查驗用。</p>

                <script>
                    //table 模式相容 IE低版本
                    $('#qrcode').qrcode({
                        render: 'table',
                        colorDark: "#000000",
                        colorLight: "rgba(0,0,0,0)",
                        text: 'http://www.google.com'
                    });
                    JsBarcode("#barcode", "Hi world!", {
                        background: "rgba(0,0,0,0)",
                        lineColor: "#000000",
                    });
                </script>

            </div>

    </div>
    </main>
    </div>
@endsection
