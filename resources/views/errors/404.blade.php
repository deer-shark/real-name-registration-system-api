@extends('covid.frontend.layouts.master')
@section('title', '404 Not Found')
@section('content')
    <div class="container ct-s">
        <main role="main" class="container">
            <div class="jumbotron">
                <h1 class="data-h3"><i class="fas fa-times"></i> 系統出現錯誤</h1>
                <p class="lead">系統出現錯誤，請稍後再試。</p>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <a href="{{ route('home') }}" class="btn btn-lg btn-outline-primary"><i
                                    class="fas fa-home"></i> 返回首頁</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <a href="javascript:;" onclick="window.location.reload()"
                               class="btn btn-lg btn-outline-primary"><i class="fas fa-redo-alt"></i> 重新載入</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
