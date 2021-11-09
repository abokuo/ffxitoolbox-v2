<!-- 繼承主版 -->
@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, sign up')
@section('meta_description', '註冊會員表單')

<!-- 標題 -->
@section('title', $title)
@section('nav_login', 'active')
<!-- 主要內容 -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <!-- 錯誤訊息顯示 -->
        @include('components.validationErrorMessage')

        <form action="/user/auth/sign-up" method="POST">
            @csrf
            <label>你的名字：
                <input type="text" name="name" value="{{ old('name') }}">
            </label><br />
            <label>你的電郵：
                <input type="text" name="email" value="{{ old('email') }}">
            </label><br />
            <label>你的密碼：
                <input type="password" name="password">
            </label><br />
            <label>確認密碼：
                <input type="password" name="password_confirmation">
            </label><br />
            <label>
                帳號類型：
                <select name="type">
                    <option value="G">一般會員</option>
                    <option value="A">管理者</option>
                </select>
            </label><br />

            <button type="submit">註冊</button>
        </form>
    </div>

@endsection
