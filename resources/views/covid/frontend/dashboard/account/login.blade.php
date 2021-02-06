@extends('covid.frontend.layouts.master')
@section('title', '登入')
@section('content')
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div class="login-form">
            <form id="form-login">
                <h2 class="text-center data-h3">管理登入</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="管理帳號" id="form-login-account">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="管理密碼" id="form-login-password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">登入</button>
                </div>
                <div class="clearfix">
                    {{--  <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>  --}}
                    <a href="javascript:void(0)" onclick="contact()" class="float-right">忘記密碼</a>
                </div>
            </form>
            {{--  <p class="text-center"><a href="#">Create an Account</a></p>  --}}
        </div>
    </div>
@endsection
