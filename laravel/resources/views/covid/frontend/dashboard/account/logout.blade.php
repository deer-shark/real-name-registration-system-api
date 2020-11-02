@extends('covid.frontend.layouts.master')
@section('title', '登出')
@section('content')
<div class="container">
    您已登出，請<a href="{{ route('login') }}">重新登入</a>
</div>
@endsection