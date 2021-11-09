@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, edit foodresult')
@section('meta_description', '編輯食物效果表單')
@section('title', $title)
@section('nav_admin', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <h2 align='center'>{{ $title }}</h2>

        <form action="/foodresult/{{ $foodresultData->id }}" method="POST" name="update_form" id="update_form"
            enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <table width="100%" border="1">
                <tr valign="top">
                    <td width="34%">
                        <label>食物名稱&nbsp;<input type='text' name='Name' id='Name' size="20"
                                value="{{ $foodresultData->Name }}"></label>
                    </td>
                    <td width="33%">
                        <label>食物種類&nbsp;
                            <select id="Class" name="Class">
                                <option value="{{ $foodresultData->Class }}" selected>{{ $foodresultData->Class }}
                                </option>
                                <option value="肉・卵料理">肉、蛋料理</option>
                                <option value="魚介料理">海鮮料理</option>
                                <option value="野菜料理">蔬菜料理</option>
                                <option value="スープ">湯類</option>
                                <option value="穀物料理">榖物料理</option>
                                <option value="スィーツ">甜點</option>
                                <option value="ドリンク">飲料</option>
                                <option value="食材">食材</option>
                                <option value="水産物">海產</option>
                                <option value="その他">其他</option>
                                <option value="?">不明</option>
                            </select></label>
                    </td>
                    <td width="33%">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>HP&nbsp;<input type='text' name='HP' id='HP' size="6"
                                value="{{ $foodresultData->HP }}"></label>
                    </td>
                    <td>
                        <label>HP+&nbsp;<input type='text' name='HPpercent' id='HPpercent' size="6"
                                value="{{ $foodresultData->HPpercent }}">%</label>
                    </td>
                    <td>
                        <label>HP+最大&nbsp;<input type='text' name='HPmax' id='HPmax' size="6"
                                value="{{ $foodresultData->HPmax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>MP&nbsp;<input type='text' name='MP' id='MP' size="6"
                                value="{{ $foodresultData->MP }}"></label>
                    </td>
                    <td>
                        <label>MP+&nbsp;<input type='text' name='MPpercent' id='MPpercent' size="6"
                                value="{{ $foodresultData->MPpercent }}">%</label>
                    </td>
                    <td>
                        <label>MP+最大&nbsp;<input type='text' name='MPmax' id='MPpercent' size="6"
                                value="{{ $foodresultData->MPmax }}"></label>
                    </td>
                </tr>
            </table>
            <table width="100%" border="1">
                <tr>
                    <td>
                        @if($foodresultData->STR < 0) <label>STR&nbsp;<input type='text' name='STR' id='STR' size="6"
                                value="{{ $foodresultData->STR }}"></label>
                            @else
                            <label>STR+&nbsp;<input type='text' name='STR' id='STR' size="6"
                                    value="{{ $foodresultData->STR }}"></label>
                            @endif
                    </td>
                    <td>
                        @if($foodresultData->DEX < 0) <label>DEX&nbsp;<input type='text' name='DEX' id='DEX' size="6"
                                value="{{ $foodresultData->DEX }}"></label>
                            @else
                            <label>DEX+&nbsp;<input type='text' name='DEX' id='DEX' size="6"
                                    value="{{ $foodresultData->DEX }}"></label>
                            @endif
                    </td>
                    <td>
                        @if($foodresultData->VIT < 0) <label>VIT&nbsp;<input type='text' name='VIT' id='VIT' size="6"
                                value="{{ $foodresultData->VIT }}"></label>
                            @else
                            <label>VIT+&nbsp;<input type='text' name='VIT' id='VIT' size="6"
                                    value="{{ $foodresultData->VIT }}"></label>
                            @endif
                    </td>
                    <td>
                        @if($foodresultData->AGI < 0) <label>AGI&nbsp;<input type='text' name='AGI' id='AGI' size="6"
                                value="{{ $foodresultData->AGI }}"></label>
                            @else
                            <label>AGI+&nbsp;<input type='text' name='AGI' id='AGI' size="6"
                                    value="{{ $foodresultData->AGI }}"></label>
                            @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($foodresultData->INT < 0) <label>INT&nbsp;<input type='text' name='INT' id='INT' size="6"
                                value="{{ $foodresultData->INT }}"></label>
                            @else
                            <label>INT+&nbsp;<input type='text' name='INT' id='INT' size="6"
                                    value="{{ $foodresultData->INT }}"></label>
                            @endif
                    </td>
                    <td>
                        @if($foodresultData->MND < 0) <label>MND&nbsp;<input type='text' name='MND' id='MND' size="6"
                                value="{{ $foodresultData->MND }}"></label>
                            @else
                            <label>MND+&nbsp;<input type='text' name='MND' id='MND' size="6"
                                    value="{{ $foodresultData->MND }}"></label>
                            @endif
                    </td>
                    <td>
                        @if($foodresultData->CHR < 0) <label>CHR&nbsp;<input type='text' name='CHR' id='CHR' size="6"
                                value="{{ $foodresultData->CHR }}"></label>
                            @else
                            <label>CHR+&nbsp;<input type='text' name='CHR' id='CHR' size="6"
                                    value="{{ $foodresultData->CHR }}"></label>
                            @endif
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>耐火+&nbsp;<input type='text' name='ResistFire' id='ResistFire' size="6"
                                value="{{ $foodresultData->ResistFire }}"></label>
                    </td>
                    <td>
                        <label>耐氷+&nbsp;<input type='text' name='ResistIce' id='ResistIce' size="6"
                                value="{{ $foodresultData->ResistIce }}"></label>
                    </td>
                    <td>
                        <label>耐風+&nbsp;<input type='text' name='ResistWind' id='ResistWind' size="6"
                                value="{{ $foodresultData->ResistWind }}"></label>
                    </td>
                    <td>
                        <label>耐土+&nbsp;<input type='text' name='ResistEarth' id='ResistEarth' size="6"
                                value="{{ $foodresultData->ResistEarth }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>耐雷+&nbsp;<input type='text' name='ResistLightning' id='ResistLightning' size="6"
                                value="{{ $foodresultData->ResistLightning }}"></label>
                    </td>
                    <td>
                        <label>耐水+&nbsp;<input type='text' name='ResistWater' id='ResistWater' size="6"
                                value="{{ $foodresultData->ResistWater }}"></label>
                    </td>
                    <td>
                        <label>耐光+&nbsp;<input type='text' name='ResistLight' id='ResistLight' size="6"
                                value="{{ $foodresultData->ResistLight }}"></label>
                    </td>
                    <td>
                        <label>耐闇+&nbsp;<input type='text' name='ResistDark' id='ResistDark' size="6"
                                value="{{ $foodresultData->ResistDark }}"></label>
                    </td>
                </tr>
            </table>
            <table width="100%" border="1">
                <tr>
                    <td width="33%">
                        <label>命中+&nbsp;<input type='text' name='Accuracy' id='Accuracy' size="6"
                                value="{{ $foodresultData->Accuracy }}"></label>
                    </td>
                    <td width="33%">
                        <label>命中+&nbsp;<input type='text' name='AccuracyPercent' id='AccuracyPercent' size="6"
                                value="{{ $foodresultData->AccuracyPercent }}">%</label>
                    </td>
                    <td width="34%">
                        <label>命中+最大&nbsp;<input type='text' name='AccuracyMax' id='AccuracyMax' size="6"
                                value="{{ $foodresultData->AccuracyMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>攻撃+&nbsp;<input type='text' name='Attack' id='Attack' size="6"
                                value="{{ $foodresultData->Attack }}"></label>
                    </td>
                    <td>
                        <label>攻撃+&nbsp;<input type='text' name='AttackPercent' id='AttackPercent' size="6"
                                value="{{ $foodresultData->AttackPercent }}">%</label>
                    </td>
                    <td>
                        <label>攻撃+最大&nbsp;<input type='text' name='AttackMax' id='AttackMax' size="6"
                                value="{{ $foodresultData->AttackMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>飛命+&nbsp;<input type='text' name='RangedAccuracy' id='RangedAccuracy' size="6"
                                value="{{ $foodresultData->RangedAccuracy }}"></label>
                    </td>
                    <td>
                        <label>飛命+&nbsp;<input type='text' name='RangedAccuracyPercent' id='RangedAccuracyPercent'
                                size="6" value="{{ $foodresultData->RangedAccuracyPercent }}">%</label>
                    </td>
                    <td>
                        <label>飛命+最大&nbsp;<input type='text' name='RangedAccuracyMax' id='RangedAccuracyMax' size="6"
                                value="{{ $foodresultData->RangedAccuracyMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>飛攻+&nbsp;<input type='text' name='RangedAttack' id='RangedAttack' size="6"
                                value="{{ $foodresultData->RangedAttack }}"></label>
                    </td>
                    <td>
                        <label>飛攻+&nbsp;<input type='text' name='RangedAttackPercent' id='RangedAttackPercent' size="6"
                                value="{{ $foodresultData->RangedAttackPercent }}">%</label>
                    </td>
                    <td>
                        <label>飛攻+最大&nbsp;<input type='text' name='RangedAttackMax' id='RangedAttackMax' size="6"
                                value="{{ $foodresultData->RangedAttackMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔命+&nbsp;<input type='text' name='MagicAccuracy' id='MagicAccuracy' size="6"
                                value="{{ $foodresultData->MagicAccuracy }}"></label>
                    </td>
                    <td>
                        <label>魔命+&nbsp;<input type='text' name='MagicAccuracyPercent' id='MagicAccuracyPercent'
                                size="6" value="{{ $foodresultData->MagicAccuracyPercent }}">%</label>
                    </td>
                    <td>
                        <label>魔命+最大&nbsp;<input type='text' name='MagicAccuracyMax' id='MagicAccuracyMax' size="6"
                                value="{{ $foodresultData->MagicAccuracyMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔攻+&nbsp;<input type='text' name='MagicAttack' id='MagicAttack' size="6"
                                value="{{ $foodresultData->MagicAttack }}"></label>
                    </td>
                    <td>
                        <label>魔攻+&nbsp;<input type='text' name='MagicAttackPercent' id='MagicAttackPercent' size="6"
                                value="{{ $foodresultData->MagicAttackPercent }}">%</label>
                    </td>
                    <td>
                        <label>魔攻+最大&nbsp;<input type='text' name='MagicAttackMax' id='MagicAttackMax' size="6"
                                value="{{ $foodresultData->MagicAttackMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($foodresultData->Evasion < 0) <label>回避&nbsp;<input type='text' name='Evasion' id='Evasion'
                                size="6" value="{{ $foodresultData->Evasion }}"></label>
                            @else
                            <label>回避+&nbsp;<input type='text' name='Evasion' id='Evasion' size="6"
                                    value="{{ $foodresultData->Evasion }}"></label>
                            @endif
                    </td>
                    <td>
                        <label>回避+&nbsp;<input type='text' name='EvasionPercent' id='EvasionPercent' size="6"
                                value="{{ $foodresultData->EvasionPercent }}">%</label>
                    </td>
                    <td>
                        <label>回避+最大&nbsp;<input type='text' name='EvasionMax' id='EvasionMax' size="6"
                                value="{{ $foodresultData->EvasionMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($foodresultData->Defense < 0) <label>防御&nbsp;<input type='text' name='Defense' id='Defense'
                                size="6" value="{{ $foodresultData->Defense }}"></label>
                            @else
                            <label>防御+&nbsp;<input type='text' name='Defense' id='Defense' size="6"
                                    value="{{ $foodresultData->Defense }}"></label>
                            @endif
                    </td>
                    <td>
                        <label>防御+&nbsp;<input type='text' name='DefensePercent' id='DefensePercent' size="6"
                                value="{{ $foodresultData->DefensePercent }}">%</label>
                    </td>
                    <td>
                        <label>防御+最大&nbsp;<input type='text' name='DefenseMax' id='DefenseMax' size="6"
                                value="{{ $foodresultData->DefenseMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔回避+&nbsp;<input type='text' name='MagicEvasion' id='MagicEvasion' size="6"
                                value="{{ $foodresultData->MagicEvasion }}"></label>
                    </td>
                    <td>
                        <label>魔回避+&nbsp;<input type='text' name='MagicEvasionPercent' id='MagicEvasionPercent' size="6"
                                value="{{ $foodresultData->MagicEvasionPercent }}">%</label>
                    </td>
                    <td>
                        <label>魔回避+最大&nbsp;<input type='text' name='MagicEvasionMax' id='MagicEvasionMax' size="6"
                                value="{{ $foodresultData->MagicEvasionMax }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔防+&nbsp;<input type='text' name='MagicDefense' id='MagicDefense' size="6"
                                value="{{ $foodresultData->MagicDefense }}"></label>
                    </td>
                    <td>
                        <label>魔防+&nbsp;<input type='text' name='MagicDefensePercent' id='MagicDefensePercent' size="6"
                                value="{{ $foodresultData->MagicDefensePercent }}">%</label>
                    </td>
                    <td>
                        <label>魔防+最大&nbsp;<input type='text' name='MagicDefenseMax' id='MagicDefenseMax' size="6"
                                value="{{ $foodresultData->MagicDefenseMax }}"></label>
                    </td>
                </tr>
            </table>
            <table width="100%" border="1">
                <tr>
                    <td>
                        @if($foodresultData->Regene < 0) <label>リジェネ&nbsp;<input type='text' name='Regene' id='Regene'
                                size="6" value="{{ $foodresultData->Regene }}"></label>
                            @else
                            <label>リジェネ+&nbsp;<input type='text' name='Regene' id='Regene' size="6"
                                    value="{{ $foodresultData->Regene }}"></label>
                            @endif
                    </td>
                    <td>
                        <label>HP総回復量：&nbsp;<input type='text' name='HPtotal' id='HPtotal' size="6"
                                value="{{ $foodresultData->HPtotal }}">%</label>
                    </td>
                    <td>
                        <label>リフレシュ+&nbsp;<input type='text' name='Refresh' id='Refresh' size="6"
                                value="{{ $foodresultData->Refresh }}"></label>
                    </td>
                    <td>
                        <label>MP総回復量：&nbsp;<input type='text' name='MPtotal' id='MPtotal' size="6"
                                value="{{ $foodresultData->MPtotal }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>リゲイン+&nbsp;<input type='text' name='Regain' id='Regain' size="6"
                                value="{{ $foodresultData->Regain }}"></label>
                    </td>
                    <td>
                        <label>TP総回復量：&nbsp;<input type='text' name='TPtotal' id='TPtotal' size="6"
                                value="{{ $foodresultData->TPtotal }}">%</label>
                    </td>
                    <td>
                        @if($foodresultData->Enmity < 0) <label>敵対心&nbsp;<input type='text' name='Enmity' id='Enmity'
                                size="6" value="{{ $foodresultData->Enmity }}"></label>
                            @else
                            <label>敵対心+&nbsp;<input type='text' name='Enmity' id='Enmity' size="6"
                                    value="{{ $foodresultData->Enmity }}"></label>
                            @endif
                    </td>
                    <td>
                        <label>ダブルアタック+&nbsp;<input type='text' name='DA' id='DA' size="6"
                                value="{{ $foodresultData->DA }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>トリプルアタック+&nbsp;<input type='text' name='TA' id='TA' size="6"
                                value="{{ $foodresultData->TA }}"></label>
                    </td>
                    <td>
                        <label>ストアTP+&nbsp;<input type='text' name='STP' id='STP' size="6"
                                value="{{ $foodresultData->STP }}"></label>
                    </td>
                    <td>
                        <label>モクシャ+&nbsp;<input type='text' name='SubtleBlow' id='SubtleBlow' size="6"
                                value="{{ $foodresultData->SubtleBlow }}"></label>
                    </td>
                    <td>
                        <label>マジックバーストダメージII+&nbsp;<input type='text' name='MB2' id='MB2' size="6"
                                value="{{ $foodresultData->MB2 }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>ファストキャスト+&nbsp;<input type='text' name='FCpercent' id='FCpercent' size="6"
                                value="{{ $foodresultData->FCpercent }}"></label>
                    </td>
                    <td>
                        <label>カウンター+&nbsp;<input type='text' name='Counter' id='Counter' size="6"
                                value="{{ $foodresultData->Counter }}"></label>
                    </td>
                    <td>
                        <label>プラントイドキラー+&nbsp;<input type='text' name='Plantoid' id='Plantoid' size="6"
                                value="{{ $foodresultData->Plantoid }}"></label>
                    </td>
                    <td>
                        <label>ビーストキラー+&nbsp;<input type='text' name='Beast' id='Beast' size="6"
                                value="{{ $foodresultData->Beast }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>アルカナキラー+&nbsp;<input type='text' name='Arcana' id='Arcana' size="6"
                                value="{{ $foodresultData->Arcana }}"></label>
                    </td>
                    <td>
                        <label>アクアンキラー+&nbsp;<input type='text' name='Aqan' id='Aqan' size="6"
                                value="{{ $foodresultData->Aqan }}"></label>
                    </td>
                    <td>
                        <label>デーモンキラー+&nbsp;<input type='text' name='Demon' id='Demon' size="6"
                                value="{{ $foodresultData->Demon }}"></label>
                    </td>
                    <td>
                        <label>アンデッドキラー+&nbsp;<input type='text' name='Undead' id='Undead' size="6"
                                value="{{ $foodresultData->Undead }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>リザードキラー+&nbsp;<input type='text' name='Lizard' id='Lizard' size="6"
                                value="{{ $foodresultData->Lizard }}"></label>
                    </td>
                    <td>
                        <label>ヴァーミンキラー+&nbsp;<input type='text' name='Vermin' id='Vermin' size="6"
                                value="{{ $foodresultData->Vermin }}"></label>
                    </td>
                    <td>
                        <label>ドラゴンキラー+&nbsp;<input type='text' name='Dragon' id='Dragon' size="6"
                                value="{{ $foodresultData->Dragon }}"></label>
                    </td>
                    <td>
                        <label>バードキラー+&nbsp;<input type='text' name='Bird' id='Bird' size="6"
                                value="{{ $foodresultData->Bird }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>レジストスロウ+&nbsp;<input type='text' name='Slow' id='Slow' size="6"
                                value="{{ $foodresultData->Slow }}"></label>
                    </td>
                    <td>
                        @if($foodresultData->Sleep < 0) <label>レジストスリープ&nbsp;<input type='text' name='Sleep' id='Sleep'
                                size="6" value="{{ $foodresultData->Sleep }}"></label>
                            @else
                            <label>レジストスリープ+&nbsp;<input type='text' name='Sleep' id='Sleep' size="6"
                                    value="{{ $foodresultData->Sleep }}"></label>
                            @endif
                    </td>
                    <td>
                        <label>レジストサイレス+&nbsp;<input type='text' name='Silence' id='Silence' size="6"
                                value="{{ $foodresultData->Silence }}"></label>
                    </td>
                    <td>
                        <label>レジストスタン+&nbsp;<input type='text' name='Stun' id='Stun' size="6"
                                value="{{ $foodresultData->Stun }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>レジストウィルス+&nbsp;<input type='text' name='Virus' id='Virus' size="6"
                                value="{{ $foodresultData->Virus }}"></label>
                    </td>
                    <td>
                        <label>レジストポイズン+&nbsp;<input type='text' name='Poison' id='Poison' size="6"
                                value="{{ $foodresultData->Poison }}"></label>
                    </td>
                    <td>
                        <label>レジストブライン+&nbsp;<input type='text' name='Blind' id='Blind' size="6"
                                value="{{ $foodresultData->Blind }}"></label>
                    </td>
                    <td>
                        <label>レジストパライズ+&nbsp;<input type='text' name='Paralyze' id='Paralyze' size="6"
                                value="{{ $foodresultData->Paralyze }}"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>レジストペトリ+&nbsp;<input type='text' name='Petrify' id='Petrify' size="6"
                                value="{{ $foodresultData->Petrify }}"></label>
                    </td>
                    <td>
                        <label>レジストカーズ+&nbsp;<input type='text' name='Curse' id='Curse' size="6"
                                value="{{ $foodresultData->Curse }}"></label>
                    </td>
                    <td>
                        <label>レジストアムネジア+&nbsp;<input type='text' name='Amnesia' id='Amnesia' size="6"
                                value="{{ $foodresultData->Amnesia }}"></label>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>ヒーリングHP+&nbsp;<input type='text' name='HHP' id='HHP' size="6"
                                value="{{ $foodresultData->HHP }}"></label>
                    </td>
                    <td>
                        <label>ヒーリングMP+&nbsp;<input type='text' name='HMP' id='HMP' size="6"
                                value="{{ $foodresultData->HMP }}"></label>
                    </td>
                    <td>
                        <label>合成成功率+&nbsp;<input type='text' name='SynthesisSuccessRate' id='SynthesisSuccessRate'
                                size="6" value="{{ $foodresultData->SynthesisSuccessRate }}">%</label>
                    </td>
                    <td>
                        <label>合成スキル上昇率+&nbsp;<input type='text' name='SyntheticSkillIncreaseRate'
                                id='SyntheticSkillIncreaseRate' size="6"
                                value="{{ $foodresultData->SyntheticSkillIncreaseRate }}">%</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>合成素材消失率&nbsp;<input type='text' name='SyntheticMaterialLossRate'
                                id='SyntheticMaterialLossRate' size="6"
                                value="{{ $foodresultData->SyntheticMaterialLossRate }}">%</label>
                    </td>
                    <td>
                        <label>ハイクォリティー成功率+&nbsp;<input type='text' name='HQSuccessRate' id='HQSuccessRate' size="6"
                                value="{{ $foodresultData->HQSuccessRate }}"></label>
                    </td>
                    <td>
                        <label>戦闘スキル上昇率x&nbsp;<input type='text' name='BattleSkillIncreaseRate'
                                id='BattleSkillIncreaseRate' size="6"
                                value="{{ $foodresultData->BattleSkillIncreaseRate }}">%</label>
                    </td>
                    <td>
                        <label>魔法スキル上昇率x&nbsp;<input type='text' name='MagicSkillIncreaseRate'
                                id='MagicSkillIncreaseRate' size="6"
                                value="{{ $foodresultData->MagicSkillIncreaseRate }}">%</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>釣りスキル上昇率+&nbsp;<input type='text' name='FishingSkillIncreaseRate'
                                id='FishingSkillIncreaseRate' size="6"
                                value="{{ $foodresultData->FishingSkillIncreaseRate }}"></label>
                    </td>
                    <td>
                        <label>時間&nbsp;<input type='text' name='Time' id='Time' size="6"
                                value="{{ $foodresultData->Time }}"></label>
                    </td>
                    <td>
                        </label>註記：<br />
                        <label><textarea name='Note' id='Note' cols="30"
                                rows="2">{{ $foodresultData->Note }}</textarea></label>
                    </td>
                    <td align="center">
                        <button type="submit" onclick="history.back()">送出</button>
                        &nbsp;
                        <button type="reset">重寫</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</section><!-- End About Us Section -->


<!-- Content End -->
@endsection
