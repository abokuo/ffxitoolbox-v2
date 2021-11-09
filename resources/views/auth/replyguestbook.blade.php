@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, reply guestbook')
@section('meta_description', '管理者回覆留言表單')
@section('title', $title)
@section('nav_admin', 'active')
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
                        {{ method_field('PUT') }}
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
            <tr>
                <td colspan="2">
                    <label>管理者回覆：</label><br />
                        <textarea name='adminReply' id='adminReply'>
                            @if(!old('adminReply'))
                            {!! $guestbookData->adminReply !!}
                            @endif
                            {!! old('adminReply') !!}
                        </textarea>
                        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                        <script>
                            tinymce.init({
                                        language:'zh_TW',
                                        selector:'#adminReply',
                                        plugins: 'paste link image imagetools media lists table code',
                                        toolbar: 'undo redo | formatselect | bold italic | indent outdent | paste pastetext | link image media | numlist bullist | table | code |',
                                        height: 300
                            });
                        </script>
                    <br />
                    <button type="submit">送出</button>
                    <button type="reset">重寫</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    </section><!-- End About Us Section -->


<!-- Content End -->
@endsection
