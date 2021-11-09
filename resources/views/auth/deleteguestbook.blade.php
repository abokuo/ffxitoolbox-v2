@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, confirm guestbook entry deleation')
@section('meta_description', '確認刪除留言表單')
@section('title', $title)
@section('nav_guestbook', 'active')
@section('content')
<!-- Content Start -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

        <h2 align='center'>{{ $title }}</h1>
        <table width="70%" align="center">
            <tr>
                <td>
                    <form action="/guestbook/{{ $guestbookData->id }}" method="POST" name="update_form" id="update_form">
                        @csrf
                        {{ method_field('DELETE') }}
                    <label>訪客姓名：{!! $guestbookData->guestName !!}</label>
                </td>
                <td>
                    <label>留言標題：{!! $guestbookData->guestSubject !!}</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>訪客電郵：{!! $guestbookData->guestEmail !!}</label>
                </td>
                <td>
                    <label>訪客網站：{!! $guestbookData->guestWebsite !!}</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>留言內容：<br />
                        {!! $guestbookData->guestComment !!}</label>
                </td>
            </tr>
            @if($guestbookData->adminReply != '')
                <tr>
                    <td>
                        <label>管理者回覆：</label><br />
                        {!! $guestbookData->adminReply !!}
                    </td>
                </tr>
            @endif
            <tr>
                <td>
                    <button type="submit">確認</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    </section><!-- End About Us Section -->


<!-- Content End -->
@endsection
