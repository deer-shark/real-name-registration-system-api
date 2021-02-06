@extends('covid.frontend.layouts.master')
@section('title', '現場掃入QR ID KSKG')
@section('content')
    <div class="container ct-s">
        <h3 class="data-h3">@yield('title')</h3>
        {{--
        <video id="preview"></video>
        <!-- 詢問是否允許開啟相機後，會顯示在這個元素裡 -->
        <!-- ---------- -->
        <!-- 以下程式面 -->
        <script type="text/javascript">
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        // 開啟一個新的掃描
        // 宣告變數scanner，在html<video>標籤id為preview的地方開啟相機預覽。
        // Notice:這邊注意一定要用<video>的標籤才能使用，詳情請看他的github API的部分解釋。

        scanner.addListener('scan', function(content) {
            console.log(content);
        });
        //開始偵聽掃描事件，若有偵聽到印出內容。

        Instascan.Camera.getCameras().then(function(cameras) {
        //取得設備的相機數目
            if (cameras.length > 0) {
            ///若設備相機數目大於0 則先開啟第0個相機(程式的世界是從第零個開始的)
                scanner.start(cameras[0]);
            } else {
            //若設備沒有相機數量則顯示"No cameras found";
            //這裡自行判斷要寫什麼
                console.error('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
        });
        </script>
        --}}
        <div class="container ct-s">
            <div class="row">
                <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="time"><i class="far fa-clock"></i> 時間</label>
                                    <input type="text" class="form-control disable" id="time" placeholder="2020/12/25"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="location"><i class="fas fa-location-arrow"></i> 地點</label>
                                    <input type="text" class="form-control disable" id="location" placeholder="高雄中學"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        {{--
                        <div class="row">
                            <div class="col">
                                <div class="form-group stu-in">
                                    <label for="identify"><i class="fas fa-qrcode"></i> QR ID</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="identify" placeholder="QR ID" required autofocus autocomplete="off" onMouseOver="this.select()">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">送出填報 <i class="fab fa-telegram-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group stu-in">
                                    <label for="identify"><i class="fas fa-camera"></i> Scaner</label>
                                    <div class="camera">
                                        @include('covid.frontend.api.instacam')
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--
                        <div class="form-group">
                            <label for="note"><i class="far fa-sticky-note"></i> 備註</label>
                            <textarea class="form-control is-invalid" id="note" placeholder="備註" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">送出填報 <i class="fab fa-telegram-plane"></i></button>
                        --}}
                    </form>
                    {{--
                    <hr>
                    <div class="container stu-in">
                        <div class="row">
                            <div class="alert alert-success stu-in">
                                <i class="fas fa-id-card-alt"></i> 082152 陳芳同 <span class="text-dark">已在 20201105 19:32:59 刷入</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="alert alert-danger stu-in">
                                <i class="fas fa-id-card-alt"></i> 081085 高勇成 <span class="text-dark">已在 20201105 19:30:31 刷入</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
                <div class="col-sm-6">
                    <form id="form-scan" class="stu-in">
                    <div class="form-group stu-in">
                        <label for="form-stu-id"><i class="fas fa-id-card"></i> 學號</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="form-stu-id" placeholder="學號"
                                    autofocus autocomplete="off" onMouseOver="this.select()">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">送出 <i
                                        class="fab fa-telegram-plane"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="jumbotron" style="padding-top:25px;padding-bottom:25px;">
                        <h1 class="data-h3"><i class="fas fa-id-card-alt"></i> <span id="stu-name">請先將鏡頭對準 QR Code 或直接輸入學號</span>
                        </h1>
                        <div class="row">
                            {{--
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label><i class="far fa-user"></i> 學生照片</label>
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('covid19/resources/main/images/avr-dafault.png') }}" class="img-fluid">
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
                            --}}
                            {{--
                            <div class="col-sm-8">
                            --}}
                            <div class="col stu-in">
                                {{--
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="class"><i class="far fa-map"></i> 學號</label>
                                            <input type="text" class="form-control" id="class" placeholder="班級" required autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="seat"><i class="fas fa-chair"></i> 姓名</label>
                                            <input type="text" class="form-control" id="seat" placeholder="座號" required autocomplete="off" disabled>
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="class"><i class="fas fa-school"></i> 學校</label>
                                            <input type="text" class="form-control" id="stu-school" placeholder="學校" required
                                                autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="class"><i class="fas fa-id-card-alt"></i> 學號</label>
                                            <input type="text" class="form-control" id="stu-id" placeholder="學號" required
                                                autocomplete="off" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="class"><i class="far fa-map"></i> 班級</label>
                                            <input type="text" class="form-control" id="stu-class" placeholder="班級" required
                                                autocomplete="off" disabled>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="seat"><i class="fas fa-chair"></i> 座號</label>
                                            <input type="text" class="form-control" id="stu-seat" placeholder="座號" required
                                                autocomplete="off" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-danger stu-in" id="reject-btn">駁回簽到</a>
                                    </div>
                                </div>
                                {{--
                                <div class="row">
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
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
