@extends('covid.frontend.layouts.master')
@section('title', '修改密碼')
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
            <form action="/examples/actions/confirmation.php" method="post">
                <h2 class="text-center data-h3">修改密碼</h2>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="原始密碼" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="新密碼" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="確認新密碼" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">更新</button>
                </div>
                <div class="clearfix">
                    {{--  <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>  --}}
                    <a href="javascript:void(0)" onclick="alert('請聯絡xx高中xx負責人');" class="float-right">忘記密碼</a>
                </div>
            </form>
            {{--  <p class="text-center"><a href="#">Create an Account</a></p>  --}}
        </div>
    </div>
@endsection
