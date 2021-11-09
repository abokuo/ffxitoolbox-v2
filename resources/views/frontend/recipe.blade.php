@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxi, recipe, レシピ')
@section('meta_description', '顯示 ffxi 合成配方')
@section('title', $title)
@section('nav_recipes', 'active')
@section('content')
<!-- Content Start -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <table width="100%" border="1">
            @foreach($recipes as $recipe)
            <tr bgcolor="#eeeeee">
                <th>物品名</th>
                <th>合成技能</th>
                <th>水晶</th>
                <th>合成素材</th>
                <th>HQ</th>
            </tr>
                    <tr>
                        <td>
                            <a name="{{ $recipe->id }}">
                            {{ $recipe->name }}
                            @if(session()->has('user_id') && session('user_id') == 1)
                                <br />
                                <a href="/recipe/{{ $recipe->id }}/edit">編輯</a>
                                &nbsp;&nbsp;
                                <a href="/recipe/{{ $recipe->id }}" onClick="return confirm('確定要刪除嗎？')">刪除</a>
                            @endif
                        </td>
                        <td>{!! $recipe->skill !!}</td>
                    <!-- 依水晶種類決定底色 -->
                        @switch($recipe->crystal)
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
                            {{ $recipe->crystal }}</td>
                        <!-- 列出素材，第二項以後以條件判斷 -->
                            <td>
                                {{ $recipe->material1 }}
                                @if($recipe->material2 != '')
                                    <br />{{ $recipe->material2 }}
                                @endif
                                @if($recipe->material3 != '')
                                    <br />{{ $recipe->material3 }}
                                @endif
                                @if($recipe->material4 != '')
                                    <br />{{ $recipe->material4 }}
                                @endif
                                @if($recipe->material5 != '')
                                    <br />{{ $recipe->material5 }}
                                @endif
                                @if($recipe->material6 != '')
                                    <br />{{ $recipe->material6 }}
                                @endif
                                @if($recipe->material7 != '')
                                    <br />{{ $recipe->material7 }}
                                @endif
                                @if($recipe->material8 != '')
                                    <br />{{ $recipe->material8 }}
                                @endif
                            </td>
                        <td>HQ1: {{ $recipe->HQ1 }}<br />HQ2: {{ $recipe->HQ2 }}<br />HQ3: {{ $recipe->HQ3 }}</td>
                    </tr>
                    <tr>
                        <th colspan = "6">物品說明</th>
                    </tr>
                    <!-- 物品說明，第二項以後以條件判斷 -->
                    <tr>
                        <td colspan="5">
                            【{{ $recipe->type1 }}】{!! $recipe->item1 !!}
                            @if($recipe->type2 != '')
                                <br />【{{ $recipe->type2 }}】{!! $recipe->item2 !!}
                            @endif
                            @if($recipe->type3 != '')
                                <br />【{{ $recipe->type3 }}】{!! $recipe->item3 !!}
                            @endif
                            @if($recipe->type4 != '')
                                <br />【{{ $recipe->type4 }}】{!! $recipe->item4 !!}
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
