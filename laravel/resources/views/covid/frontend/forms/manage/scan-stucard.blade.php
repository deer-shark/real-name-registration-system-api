@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '現場掃入QR ID')
@section('content')
@section('dashboard')

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
    <form action="{{ route('post.form.stu-card') }}" method="POST" class="stu-in">
        <div class="container ct-s">
            <div class="row">
                <div class="col-sm-6">
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
                </div>
                <div class="col-sm-6">
                    <div class="container stu-in">
                        <div class="row">
                            <div class="form-group stu-in">
                                <label for="identify"><i class="fas fa-qrcode"></i> QR ID</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="identify" placeholder="QR ID" required
                                           autofocus autocomplete="off" onMouseOver="this.select()">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">送出填報 <i
                                                class="fab fa-telegram-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="stu-in">
                                <label><i class="fas fa-tasks"></i> 近期掃入清單</label>
                                <button type="button" class="badge btn-sm btn-outline-danger">清除</button>
                            </div>
                            <div id="recently" class="stu-in">
                                <div class="alert alert-success stu-in">
                                    <i class="fas fa-id-card-alt"></i> 陳芳同 <span class="text-dark">已在 20201105 19:32:59 刷入</span>
                                </div>
                                <div class="alert alert-danger stu-in">
                                    <i class="fas fa-id-card-alt"></i> 高勇成 <span class="text-dark">已在 20201105 19:30:31 刷入</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@endsection
