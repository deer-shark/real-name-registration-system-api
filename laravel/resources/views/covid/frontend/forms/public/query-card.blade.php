@extends('covid.frontend.layouts.master')
@section('title', '通行證查詢')
@section('content')
    <div class="container ct-s">
        <h3 class="data-h3">@yield('title')</h3>
        <form action="{{ route('post.form.normal.query') }}" method="POST">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="name"><i class="far fa-user"></i> 姓名</label>
                        <input type="text" class="form-control" id="name" placeholder="姓名" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="identify"><i class="far fa-id-card"></i> 身分證字號</label>
                        <input type="text" class="form-control" id="identify" placeholder="身分證字號" required
                               autocomplete="off">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">送出查詢 <i class="fab fa-telegram-plane"></i></button>
        </form>
    </div>

@endsection
