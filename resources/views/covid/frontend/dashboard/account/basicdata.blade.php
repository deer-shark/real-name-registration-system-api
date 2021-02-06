@extends('covid.frontend.layouts.dashboard.master')
@extends('covid.frontend.layouts.master')
@section('title', '修改組織資料')
@section('content')
@section('dashboard')
    <div class="container ct-s">
        <form action="{{ route('post.account') }}" method="POST">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="name">單位名稱</label>
                        <input type="text" class="form-control" id="name" placeholder="單位名稱" required
                               autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="identify">帳號隸屬負責人</label>
                        <input type="text" class="form-control" id="identify" placeholder="帳號隸屬負責人" required disabled
                               autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="phone">聯絡電話</label>
                        <input type="text" class="form-control" id="phone" placeholder="聯絡電話" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="location">組織地址</label>
                        <input type="text" class="form-control" id="location" placeholder="組織地址" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="pw-o">舊密碼 (必)</label>
                        <input type="text" class="form-control" id="pw-o" placeholder="舊密碼" required>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="pw-n">新密碼</label>
                        <input type="text" class="form-control" id="pw-n" placeholder="新密碼" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-lg btn-primary">送出修改</button>
        </form>
    </div>
@endsection
@endsection
