<!-- 繼承主版 -->
@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, login form')
@section('meta_description', '登入表單')

<!-- 標題 -->
@section('title', $title)
@section('nav_login', 'active')
<!-- 主要內容 -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <!-- 錯誤訊息顯示 -->
        @include('components.validationErrorMessage')

        <form action="/user/auth/login" method="POST">
            @csrf
            </label><br />
            <label>你的電郵：
                <input type="text" name="email" value="{{ old('email') }}">
            </label><br />
            <label>你的密碼：
                <input type="password" name="password">
            </label><br />
            {!! HCaptcha::display() !!}
            <button type="submit">登入</button>
        </form>
    </div>

@endsection
