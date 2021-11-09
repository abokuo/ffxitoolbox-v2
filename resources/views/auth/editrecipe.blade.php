@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, edut recipe')
@section('meta_description', '編輯合成配方表單')
@section('title', $title)
@section('nav_admin', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <h2 align='center'>{{ $title }}</h1>
            <form action="/recipe/{{ $recipeData->id }}" method="POST" name="update_form" id="update_form"
                enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <table width="100%">
                    <tr>
                        <td colspan="4">
                            <label>合成品名：<input type='text' name='name' id='name' size="22"
                                    value="{{ $recipeData->name }}"></label>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>
                            <label>合成種類：
                                <select id="guild" name="guild">
                                    <option value="{{ $recipeData->guild }}" selected>{{ $recipeData->guild }}</option>
                                    <option value="木工">木工</option>
                                    <option value="鍛冶">鍛冶</option>
                                    <option value="彫金">彫金</option>
                                    <option value="裁縫">裁縫</option>
                                    <option value="革細工">革細工</option>
                                    <option value="骨細工">骨細工</option>
                                    <option value="錬金術">錬金術</option>
                                    <option value="調理">調理</option>
                                    <option value="?">?</option>
                                </select></label>
                        </td>
                        <td>
                            <label>合成段位：
                                <select id="skillrank" name="skillrank">
                                    <option value="{{ $recipeData->skillrank }}" selected>{{ $recipeData->skillrank }}
                                    </option>
                                    <option value="素人">素人</option>
                                    <option value="見習">見習</option>
                                    <option value="徒弟">徒弟</option>
                                    <option value="下級">下級</option>
                                    <option value="名取">名取</option>
                                    <option value="目錄">目錄</option>
                                    <option value="印可">印可</option>
                                    <option value="高弟">高弟</option>
                                    <option value="皆伝">皆伝</option>
                                    <option value="師範">師範</option>
                                    <option value="高級">高級</option>
                                    <option value="?">?</option>
                                </select></label>
                        </td>
                        <td>
                            <label>水晶：
                                <select name='crystal' id='crystal'>
                                    <option value="{{ $recipeData->crystal }}" selected>{{ $recipeData->crystal }}
                                    </option>
                                    <option value="炎">炎</option>
                                    <option value="土">土</option>
                                    <option value="水">水</option>
                                    <option value="風">風</option>
                                    <option value="氷">氷</option>
                                    <option value="雷">雷</option>
                                    <option value="光">光</option>
                                    <option value="闇">闇</option>
                                    <option value="灼熱">灼熱</option>
                                    <option value="凍結">凍結</option>
                                    <option value="旋風">旋風</option>
                                    <option value="大地">大地</option>
                                    <option value="稲妻">稲妻</option>
                                    <option value="泉水">泉水</option>
                                    <option value="斜光">斜光</option>
                                    <option value="常闇">常闇</option>
                                    <option value="?">?</option>
                                </select></label>
                        </td>
                        <td>
                            <label>技能需求：<br />
                                <textarea name='skill' id='skill' cols='15'
                                    rows='4'>{{ $recipeData->skill }}</textarea></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>素材1：<input type='text' name='material1' id='material1' size='22'
                                    value="{{ $recipeData->material1 }}"></label>
                        </td>
                        <td>
                            <label>素材2：<input type='text' name='material2' id='material2' size='22'
                                    value="{{ $recipeData->material2 }}"></label>
                        </td>
                        <td>
                            <label>素材3：<input type='text' name='material3' id='material3' size='22'
                                    value="{{ $recipeData->material3 }}"></label>
                        </td>
                        <td>
                            <label>素材4：<input type='text' name='material4' id='material4' size='22'
                                    value="{{ $recipeData->material4 }}"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>素材5：<input type='text' name='material5' id='material5' size='22'
                                    value="{{ $recipeData->material5 }}"></label>
                        </td>
                        <td>
                            <label>素材6：<input type='text' name='material6' id='material6' size='22'
                                    value="{{ $recipeData->material6 }}"></label>
                        </td>
                        <td>
                            <label>素材7：<input type='text' name='material7' id='material7' size='22'
                                    value="{{ $recipeData->material7 }}"></label>
                        </td>
                        <td>
                            <label>素材8：<input type='text' name='material8' id='material8' size='22'
                                    value="{{ $recipeData->material8 }}"></label>
                        </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td>
                            <label>HQ1：<input type='text' name='HQ1' id='HQ1' value="{{ $recipeData->HQ1 }}"></label>
                        </td>
                        <td>
                            <label>HQ2：<input type='text' name='HQ2' id='HQ2' value="{{ $recipeData->HQ2 }}"></label>
                        </td>
                        <td>
                            <label>HQ3：<input type='text' name='HQ3' id='HQ3' value="{{ $recipeData->HQ3 }}"></label>
                        </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td>
                            <label>物品1類型
                                <select id="type1" name="type1">
                                    <option value="{{ $recipeData->type1 }}" selected>{{ $recipeData->type1 }}</option>
                                    <option value="格闘">格闘</option>
                                    <option value="短剣">短剣</option>
                                    <option value="片手剣">片手剣</option>
                                    <option value="両手剣">両手剣</option>
                                    <option value="片手斧">片手斧</option>
                                    <option value="両手斧">両手斧</option>
                                    <option value="両手鎌">両手鎌</option>
                                    <option value="両手槍">両手槍</option>
                                    <option value="片手刀">片手刀</option>
                                    <option value="両手刀">両手刀</option>
                                    <option value="片手棍">片手棍</option>
                                    <option value="両手棍">両手棍</option>
                                    <option value="射撃">射撃</option>
                                    <option value="弓">弓</option>
                                    <option value="投擲">投擲</option>
                                    <option value="管楽器">管楽器</option>
                                    <option value="弦楽器">弦楽器</option>
                                    <option value="矢弾">矢弾</option>
                                    <option value="釣竿">釣竿</option>
                                    <option value="釣餌">釣餌</option>
                                    <option value="獣の餌">獣の餌</option>
                                    <option value="グリップ">グリップ</option>
                                    <option value="盾">盾</option>
                                    <option value="頭">頭</option>
                                    <option value="首">首</option>
                                    <option value="胴">胴</option>
                                    <option value="両手">両手</option>
                                    <option value="腰">腰</option>
                                    <option value="両脚">両脚</option>
                                    <option value="両足">両足</option>
                                    <option value="背">背</option>
                                    <option value="耳">耳</option>
                                    <option value="指">指</option>
                                    <option value="薬品">薬品</option>
                                    <option value="調度品">調度品</option>
                                    <option value="金属材">金属材</option>
                                    <option value="貴金属材">貴金属材</option>
                                    <option value="布材">布材</option>
                                    <option value="皮革材">皮革材</option>
                                    <option value="骨材">骨材</option>
                                    <option value="木材">木材</option>
                                    <option value="錬金術材">錬金術材</option>
                                    <option value="肉卵料理">肉卵料理</option>
                                    <option value="魚介料理">魚介料理</option>
                                    <option value="野菜料理">野菜料理</option>
                                    <option value="スープ類">スープ類</option>
                                    <option value="穀物料理">穀物料理</option>
                                    <option value="スィーツ">スィーツ</option>
                                    <option value="ドリンク">ドリンク</option>
                                    <option value="水産物">水産物</option>
                                    <option value="食材">食材</option>
                                    <option value="雑貨">雑貨</option>
                                    <option value="カード">カード</option>
                                    <option value="忍具">忍具</option>
                                    <option value="呪物">呪物</option>
                                    <option value="からくり部品">からくり部品</option>
                                    <option value="?">?</option>
                                </select></label><br />
                            <label>物品1說明<br /><textarea name='item1' id='item1' cols="50"
                                    rows="4">{{ $recipeData->item1 }}</textarea></label>
                        </td>
                        <td>
                            <label>物品2類型
                                <select id="type2" name="type2">
                                    <option value="{{ $recipeData->type2 }}" selected>{{ $recipeData->type2 }}</option>
                                    <option value="格闘">格闘</option>
                                    <option value="短剣">短剣</option>
                                    <option value="片手剣">片手剣</option>
                                    <option value="両手剣">両手剣</option>
                                    <option value="片手斧">片手斧</option>
                                    <option value="両手斧">両手斧</option>
                                    <option value="両手鎌">両手鎌</option>
                                    <option value="両手槍">両手槍</option>
                                    <option value="片手刀">片手刀</option>
                                    <option value="両手刀">両手刀</option>
                                    <option value="片手棍">片手棍</option>
                                    <option value="両手棍">両手棍</option>
                                    <option value="射撃">射撃</option>
                                    <option value="弓">弓</option>
                                    <option value="投擲">投擲</option>
                                    <option value="管楽器">管楽器</option>
                                    <option value="弦楽器">弦楽器</option>
                                    <option value="矢弾">矢弾</option>
                                    <option value="釣竿">釣竿</option>
                                    <option value="釣餌">釣餌</option>
                                    <option value="獣の餌">獣の餌</option>
                                    <option value="グリップ">グリップ</option>
                                    <option value="盾">盾</option>
                                    <option value="頭">頭</option>
                                    <option value="首">首</option>
                                    <option value="胴">胴</option>
                                    <option value="両手">両手</option>
                                    <option value="腰">腰</option>
                                    <option value="両脚">両脚</option>
                                    <option value="両足">両足</option>
                                    <option value="背">背</option>
                                    <option value="耳">耳</option>
                                    <option value="指">指</option>
                                    <option value="薬品">薬品</option>
                                    <option value="調度品">調度品</option>
                                    <option value="金属材">金属材</option>
                                    <option value="貴金属材">貴金属材</option>
                                    <option value="布材">布材</option>
                                    <option value="皮革材">皮革材</option>
                                    <option value="骨材">骨材</option>
                                    <option value="木材">木材</option>
                                    <option value="錬金術材">錬金術材</option>
                                    <option value="肉卵料理">肉卵料理</option>
                                    <option value="魚介料理">魚介料理</option>
                                    <option value="野菜料理">野菜料理</option>
                                    <option value="スープ類">スープ類</option>
                                    <option value="穀物料理">穀物料理</option>
                                    <option value="スィーツ">スィーツ</option>
                                    <option value="ドリンク">ドリンク</option>
                                    <option value="水産物">水産物</option>
                                    <option value="食材">食材</option>
                                    <option value="雑貨">雑貨</option>
                                    <option value="カード">カード</option>
                                    <option value="忍具">忍具</option>
                                    <option value="呪物">呪物</option>
                                    <option value="からくり部品">からくり部品</option>
                                    <option value="?">?</option>
                                </select></label><br />
                            <label>物品2說明<br /><textarea name='item2' id='item2' cols="50"
                                    rows="4">{{ $recipeData->item2 }}</textarea></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>物品3類型
                                <select id="type3" name="type3">
                                    <option value="{{ $recipeData->type3 }}" selected>{{ $recipeData->type3 }}</option>
                                    <option value="格闘">格闘</option>
                                    <option value="短剣">短剣</option>
                                    <option value="片手剣">片手剣</option>
                                    <option value="両手剣">両手剣</option>
                                    <option value="片手斧">片手斧</option>
                                    <option value="両手斧">両手斧</option>
                                    <option value="両手鎌">両手鎌</option>
                                    <option value="両手槍">両手槍</option>
                                    <option value="片手刀">片手刀</option>
                                    <option value="両手刀">両手刀</option>
                                    <option value="片手棍">片手棍</option>
                                    <option value="両手棍">両手棍</option>
                                    <option value="射撃">射撃</option>
                                    <option value="弓">弓</option>
                                    <option value="投擲">投擲</option>
                                    <option value="管楽器">管楽器</option>
                                    <option value="弦楽器">弦楽器</option>
                                    <option value="矢弾">矢弾</option>
                                    <option value="釣竿">釣竿</option>
                                    <option value="釣餌">釣餌</option>
                                    <option value="獣の餌">獣の餌</option>
                                    <option value="グリップ">グリップ</option>
                                    <option value="盾">盾</option>
                                    <option value="頭">頭</option>
                                    <option value="首">首</option>
                                    <option value="胴">胴</option>
                                    <option value="両手">両手</option>
                                    <option value="腰">腰</option>
                                    <option value="両脚">両脚</option>
                                    <option value="両足">両足</option>
                                    <option value="背">背</option>
                                    <option value="耳">耳</option>
                                    <option value="指">指</option>
                                    <option value="薬品">薬品</option>
                                    <option value="調度品">調度品</option>
                                    <option value="金属材">金属材</option>
                                    <option value="貴金属材">貴金属材</option>
                                    <option value="布材">布材</option>
                                    <option value="皮革材">皮革材</option>
                                    <option value="骨材">骨材</option>
                                    <option value="木材">木材</option>
                                    <option value="錬金術材">錬金術材</option>
                                    <option value="肉卵料理">肉卵料理</option>
                                    <option value="魚介料理">魚介料理</option>
                                    <option value="野菜料理">野菜料理</option>
                                    <option value="スープ類">スープ類</option>
                                    <option value="穀物料理">穀物料理</option>
                                    <option value="スィーツ">スィーツ</option>
                                    <option value="ドリンク">ドリンク</option>
                                    <option value="水産物">水産物</option>
                                    <option value="食材">食材</option>
                                    <option value="雑貨">雑貨</option>
                                    <option value="カード">カード</option>
                                    <option value="忍具">忍具</option>
                                    <option value="呪物">呪物</option>
                                    <option value="からくり部品">からくり部品</option>
                                    <option value="?">?</option>
                                </select></label><br />
                            <label>物品3說明<br /><textarea name='item3' id='item3' cols="50"
                                    rows="4">{{ $recipeData->item3 }}</textarea></label>
                        </td>
                        <td>
                            <label>物品4類型
                                <select id="type4" name="type4">
                                    <option value="{{ $recipeData->type4 }}" selected>{{ $recipeData->type4 }}</option>
                                    <option value="格闘">格闘</option>
                                    <option value="短剣">短剣</option>
                                    <option value="片手剣">片手剣</option>
                                    <option value="両手剣">両手剣</option>
                                    <option value="片手斧">片手斧</option>
                                    <option value="両手斧">両手斧</option>
                                    <option value="両手鎌">両手鎌</option>
                                    <option value="両手槍">両手槍</option>
                                    <option value="片手刀">片手刀</option>
                                    <option value="両手刀">両手刀</option>
                                    <option value="片手棍">片手棍</option>
                                    <option value="両手棍">両手棍</option>
                                    <option value="射撃">射撃</option>
                                    <option value="弓">弓</option>
                                    <option value="投擲">投擲</option>
                                    <option value="管楽器">管楽器</option>
                                    <option value="弦楽器">弦楽器</option>
                                    <option value="矢弾">矢弾</option>
                                    <option value="釣竿">釣竿</option>
                                    <option value="釣餌">釣餌</option>
                                    <option value="獣の餌">獣の餌</option>
                                    <option value="グリップ">グリップ</option>
                                    <option value="盾">盾</option>
                                    <option value="頭">頭</option>
                                    <option value="首">首</option>
                                    <option value="胴">胴</option>
                                    <option value="両手">両手</option>
                                    <option value="腰">腰</option>
                                    <option value="両脚">両脚</option>
                                    <option value="両足">両足</option>
                                    <option value="背">背</option>
                                    <option value="耳">耳</option>
                                    <option value="指">指</option>
                                    <option value="薬品">薬品</option>
                                    <option value="調度品">調度品</option>
                                    <option value="金属材">金属材</option>
                                    <option value="貴金属材">貴金属材</option>
                                    <option value="布材">布材</option>
                                    <option value="皮革材">皮革材</option>
                                    <option value="骨材">骨材</option>
                                    <option value="木材">木材</option>
                                    <option value="錬金術材">錬金術材</option>
                                    <option value="肉卵料理">肉卵料理</option>
                                    <option value="魚介料理">魚介料理</option>
                                    <option value="野菜料理">野菜料理</option>
                                    <option value="スープ類">スープ類</option>
                                    <option value="穀物料理">穀物料理</option>
                                    <option value="スィーツ">スィーツ</option>
                                    <option value="ドリンク">ドリンク</option>
                                    <option value="水産物">水産物</option>
                                    <option value="食材">食材</option>
                                    <option value="雑貨">雑貨</option>
                                    <option value="カード">カード</option>
                                    <option value="忍具">忍具</option>
                                    <option value="呪物">呪物</option>
                                    <option value="からくり部品">からくり部品</option>
                                    <option value="?">?</option>
                                </select></label><br />
                            <label>物品4說明<br /><textarea name='item4' id='item4' cols="50"
                                    rows="4">{{ $recipeData->item4 }}</textarea></label>
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
