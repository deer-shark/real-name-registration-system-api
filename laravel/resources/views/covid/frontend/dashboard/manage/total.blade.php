@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '所有填報資料')
@section('content')
    @section('dashboard')
        <div class="container ct-s">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button onclick='alertTest()'>Alert</button>
    <button onclick='confirmTest()'>Confirm</button>
    <script>
        function alertTest() {
            Swal.fire(
                "查詢作業失敗", //標題 
                "您所輸入的序號不存在或是系統被玩壞了!", //訊息內容(可省略)
                "error" //圖示(可省略) success/info/warning/error/question
                //圖示範例：https://sweetalert2.github.io/#icons
            );
        }
        function confirmTest() {
            Swal.fire({
                title: "操作確認",
                text: "請點選你想按的按鈕",
                showCancelButton: true
            }).then(function(result) {
               if (result.value) {
                    Swal.fire("您按了OK");
               }
               else {
                   Swal.fire("您選擇了Cancel");
               }
            });
        }
    </script>
    @endsection
@endsection