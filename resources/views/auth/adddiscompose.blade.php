@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, add discompose')
@section('meta_description', '增加分解資料表單')
@section('title', $title)
@section('nav_admin', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <h2 align='center'>{{ $title }}</h1>
            <form action="/discompose/add" method="POST" name="update_form" id="update_form"
                enctype="multipart/form-data">
                @csrf
                <table width="100%">
                    <tr valign="top">
                        <td>
                            <label>分解物品名：<input type='text' name='material1' id='material1' size="16"
                                    placeholder="請輸入分解品名稱""></label>
                        </td>
                        <td>
                            <label>分解種類：
                                <select id="guild" name="guild">
                                    <option value="獣人装備">獣人装備</option>
                                    <option value="特殊装備">特殊装備</option>
                                    <option value="合成装備(木工)">合成装備(木工)</option>
                                    <option value="合成装備(鍛冶)">合成装備(鍛冶)</option>
                                    <option value="合成装備(彫金)">合成装備(彫金)</option>
                                    <option value="合成装備(裁縫)">合成装備(裁縫)</option>
                                    <option value="合成装備(革細工)">合成装備(革細工)</option>
                                    <option value="合成装備(骨細工)">合成装備(骨細工)</option>
                                    <option value="合成装備(錬金術)">合成装備(錬金術)</option>
                                    <option value="リアセンブル">合成幻珠</option>
                                    <option value="?">?</option>
                                </select></label>
                        </td>
                        <td>
                            <label>水晶：
                                <select name='crystal' id='crystal'>
                                    <option value="風">風</option>
                                    <option value="雷">雷</option>
                                    <option value="?">?</option>
                                </select></label>
                        </td>
                        <td>
                            <label>分解需求：<input type='text' name='skill' id='skill' size='16'
                                placeholder="輸入需要的合成能力或種類"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>NQ：<input type='text' name='name' id='name' size='16'
                                    placeholder="輸入分解NQ成品"></label>
                        </td>
                        <td>
                            <label>HQ1：<input type='text' name='HQ1' id='HQ1' size='16' placeholder="輸入分解HQ1成品"></label>
                        </td>
                        <td>
                            <label>HQ2：<input type='text' name='HQ2' id='HQ2' size='16' placeholder="輸入分解HQ2成品"></label>
                        </td>
                        <td>
                            <label>HQ3：<input type='text' name='HQ3' id='HQ3' size='16' placeholder="輸入分解HQ3成品"></label>
                        </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td>
                            <label>物品1類型
                                <input type='text' name='type1' id='type1'></label>
                                <br />
                            <label>物品1說明<br /><textarea name='item1' id='item1' cols="50" rows="4"></textarea></label>
                        </td>
                        <td>
                            <label>物品2類型
                                <input type='text' name='type2' id='type2'></label>
                                <br />
                            <label>物品2說明<br /><textarea name='item2' id='item2' cols="50" rows="4"></textarea></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>物品3類型
                                <input type='text' name='type3' id='type3'></label>
                                <br />
                            <label>物品3說明<br /><textarea name='item3' id='item3' cols="50" rows="4"></textarea></label>
                        </td>
                        <td>
                            <label>物品4類型
                                <input type='text' name='type4' id='type4'></label>
                                <br />
                            <label>物品4說明<br /><textarea name='item4' id='item4' cols="50" rows="4"></textarea></label>
                        </td>
                    </tr>
                </table>
                <p align="center">
                    <button type="submit" onclick="history.back()">送出</button>
                    <button type="reset">重寫</button>
                </p>
            </form>

    </div>
</section><!-- End About Us Section -->


<!-- Content End -->
@endsection
