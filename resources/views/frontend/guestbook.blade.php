@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, 留言板')
@section('meta_description', 'ffxitoolbox 訪客留言板')
@section('title', $title)
@section('nav_guestbook', 'active')
@section('content')
<!-- Content Start -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
        <table width="70%" align="center">
            <tr>
                <td>
                    <form action="/guestbook/add" method="POST" name="update_form" id="update_form">
                        @csrf
                    <label>訪客姓名：<input type='text' name='guestName' id='guestName' placeholder="請留下大名" size="22"></label>
                </td>
                <td>
                    <label>留言標題：<input type='text' name='guestSubject' id='guestSubject' size="22"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>訪客電郵：<input type='text' name='guestEmail' id='guestEmail' placeholder="請留下有效email" size="22"></label>
                </td>
                <td>
                    <label>訪客網站：<input type='text' name='guestWebsite' id='guestWebsite' size="22" placeholder="http:// 或 https://"></label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>留言內容：<br />
                    <textarea name='guestComment' id='guestComment' cols='70' rows='4' placeholder="請留下留言內容"></textarea></label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    {!! HCaptcha::display() !!}
                    <button type="submit">送出</button>
                    <button type="reset">重寫</button>
                    </form>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        @foreach($guestbooks as $guestbook)
            <table width="100%" align="center">
                @if($guestbook->id %2 == 0)
                    <tr bgcolor="f0f0f0">
                @else
                    <tr>
                @endif
                    <td valign="top" rowspan="2" width="15%" align="center">
                        @if(session()->has('user_id') && session('user_id') == 1)
                            <p>
                                <a href="/guestbook/{{ $guestbook->id }}/edit">回覆</a>
                                &nbsp;&nbsp;
                                <a href="/guestbook/{{ $guestbook->id }}/delete">刪除</a>
                            </p>
                        @endif

                        <p><strong>{!! $guestbook->guestName !!}</strong></p>
                        @if($guestbook->guestEmail != '')
                            <a href="email:{{ $guestbook->guestEmail }}">電郵</a>
                        @endif
                        @if(( $guestbook->guestWebsite != ''))
                            &nbsp;&nbsp;
                            <a href="{{ $guestbook->guestWebsite }}" target="_blank">網站</a>
                        @endif
                        <p>{{ $guestbook->creat_at }}</p>
                    </td>
                    <td>
                        <strong>【{!! $guestbook->guestSubject !!}】</strong>
                    </td>
                    <td align="right">
                        {{ $guestbook->created_at }}
                    </td>
                </tr>
                @if($guestbook->id %2 == 0)
                    <tr bgcolor="f0f0f0">
                @else
                    <tr>
                @endif
                    <td width="85%" valign="top" colspan="2">
                        {!! $guestbook->guestComment !!}
                    </td>
                </tr>
                @if($guestbook->adminReply != '')
                    <tr>
                        <td colspan="3" align="right">
                            管理者回覆：<br />
                            {!! $guestbook->adminReply !!}
                        </td>
                    </tr>
                @endif
            </table>
    @endforeach
    {{ $guestbooks->links() }}
    </div>
    </section><!-- End About Us Section -->


<!-- Content End -->
@endsection
