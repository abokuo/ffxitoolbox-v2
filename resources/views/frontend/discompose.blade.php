@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxi, 分解')
@section('meta_description', '顯示 ffxi 物品/裝備分解資料')
@section('title', $title)
@section('nav_discomposes', 'active')
@section('content')
<!-- Content Start -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <p>點選名稱開新瀏覽器視窗前往<a href="http://wiki.ffo.jp" target="_blank">FF11用語辞典 ～ ウィンダスの仲間たち版</a>觀看明細</p>
            <table width="100%" border="1">
            @foreach($discomposes as $discompose)
            <tr>
                <th>分解物品名</th>
                <th>水晶</th>
                <th>合成技能</th>
                <th>NQ</th>
                <th>HQ1</th>
                <th>HQ2</th>
                <th>HQ3</th>
            </tr>
                    <tr>
                        <a name="{{ $discompose->id }}">
                        <td>
                            <a href='http://wiki.ffo.jp/search.cgi?imageField.x=0&imageField.y=0&CCC=%E6%84%9B&Command=Search&qf={!! $discompose->material1 !!}&order=match&ffotype=title&type=title' target='_blank'>
                            {!! $discompose->material1 !!}</a>
                            @if(session()->has('user_id') && session('user_id') == 1)
                                <br />
                                <a href="/discompose/{{ $discompose->id }}/edit">編輯</a>
                                &nbsp;&nbsp;
                                <a href="/discompose/{{ $discompose->id }}" onClick="return confirm('確定要刪除嗎？')">刪除</a>
                            @endif
                        </td>
                    <!-- 依水晶種類決定底色 -->
                        @switch($discompose->crystal)
                            @case('炎')
                                <td align="center" bgcolor="#ffb8b8">
                            @break
                            @case('土')
                                <td align="center" bgcolor="#ffe866">
                            @break
                            @case('水')
                                <td align="center" bgcolor="#b0e6ff">
                            @break
                            @case('風')
                                <td align="center" bgcolor="#66ff66">
                            @break
                            @case('氷')
                                <td align="center" bgcolor="#e0ffff">
                            @break
                            @case('雷')
                                <td align="center" bgcolor="#ffc0ff">
                            @break
                            @case('光')
                                <td align="center" bgcolor="#f8ffff">
                            @break
                            @case('闇')
                                <td align="center" bgcolor="#d4d4d4">
                            @break
                            @case('灼熱')
                                <td align="center" bgcolor="#ffb8b8">
                            @break
                            @case('大地')
                                <td align="center" bgcolor="#ffe866">
                            @break
                            @case('泉水')
                                <td align="center" bgcolor="#b0e6ff">
                            @break
                            @case('旋風')
                                <td align="center" bgcolor="#66ff66">
                            @break
                            @case('凍結')
                                <td align="center" bgcolor="#e0ffff">
                            @break
                            @case('稲妻')
                                <td align="center" bgcolor="#ffc0ff">
                            @break
                            @case('斜光')
                                <td align="center" bgcolor="#f8ffff">
                            @break
                            @case('常闇')
                                <td align="center" bgcolor="#d4d4d4">
                            @break
                            @default
                                <td align="center" bgcolor="#ffffff">
                        @endswitch
                            {{ $discompose->crystal }}</td>
                            <td>{!! $discompose->skill !!}</td>
                        <!-- 列出素材，第二項以後以條件判斷 -->
                            <td>{{ $discompose->name }}</td>
                            <td>{{ $discompose->HQ1 }}</td>
                            <td>{{ $discompose->HQ2 }}</td>
                            <td>{{ $discompose->HQ3 }}</td>
                    </tr>
                    <tr>
                        <th colspan="7">物品說明</th>
                    </tr>
                    <!-- 物品說明，第二項以後以條件判斷 -->
                    <tr>
                        <td colspan="7">
                            【{{ $discompose->type1 }}】{!! $discompose->item1 !!}
                            @if($discompose->type2 != '')
                                <br />【{{ $discompose->type2 }}】{!! $discompose->item2 !!}
                            @endif
                            @if($discompose->type3 != '')
                                <br />【{{ $discompose->type3 }}】{!! $discompose->item3 !!}
                            @endif
                            @if($discompose->type4 != '')
                                <br />【{{ $discompose->type4 }}】{!! $discompose->item4 !!}
                            @endif
                        </td>
                    </tr>
            @endforeach
            </table>
            <p align="right"><a href="#top">回頁首</a></p>
        </div>
    </section><!-- End About Us Section -->


<!-- Content End -->
@endsection
