@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox, add foodresult')
@section('meta_description', '增加食物效果資料表單')
@section('title', $title)
@section('nav_admin', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <h2 align='center'>{{ $title }}</h2>
        <form action="/foodresult/add" method="POST" name="update_form" id="update_form">
            @csrf
            <table width="100%" border="1">
                <tr valign="top">
                    <td width="34%">
                        <label>食物名稱&nbsp;<input type='text' name='Name' id='Name' size="20"></label>
                    </td>
                    <td width="33%">
                        <label>食物種類&nbsp;
                            <select id="Class" name="Class">
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
                        <label>HP&nbsp;<input type='text' name='HP' id='HP' size="6"></label>
                    </td>
                    <td>
                        <label>HP+&nbsp;<input type='text' name='HPpercent' id='HPpercent' size="6">%</label>
                    </td>
                    <td>
                        <label>HP+最大&nbsp;<input type='text' name='HPmax' id='HPmax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>MP&nbsp;<input type='text' name='MP' id='MP' size="6"></label>
                    </td>
                    <td>
                        <label>MP+&nbsp;<input type='text' name='MPpercent' id='MPpercent' size="6">%</label>
                    </td>
                    <td>
                        <label>MP+最大&nbsp;<input type='text' name='MPmax' id='MPpercent' size="6"></label>
                    </td>
                </tr>
            </table>
            <table width="100%" border="1">
                <tr>
                    <td>
                        <label>STR&nbsp;<input type='text' name='STR' id='STR' size="6"></label>
                    </td>
                    <td>
                        <label>DEX&nbsp;<input type='text' name='DEX' id='DEX' size="6"></label>
                    </td>
                    <td>
                        <label>VIT&nbsp;<input type='text' name='VIT' id='VIT' size="6"></label>
                    </td>
                    <td>
                        <label>AGI&nbsp;<input type='text' name='AGI' id='AGI' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>INT&nbsp;<input type='text' name='INT' id='INT' size="6"></label>
                    </td>
                    <td>
                        <label>MND&nbsp;<input type='text' name='MND' id='MND' size="6"></label>
                    </td>
                    <td>
                        <label>CHR&nbsp;<input type='text' name='CHR' id='CHR' size="6"></label>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>耐火+&nbsp;<input type='text' name='ResistFire' id='ResistFire' size="6"></label>
                    </td>
                    <td>
                        <label>耐氷+&nbsp;<input type='text' name='ResistIce' id='ResistIce' size="6"></label>
                    </td>
                    <td>
                        <label>耐風+&nbsp;<input type='text' name='ResistWind' id='ResistWind' size="6"></label>
                    </td>
                    <td>
                        <label>耐土+&nbsp;<input type='text' name='ResistEarth' id='ResistEarth' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>耐雷+&nbsp;<input type='text' name='ResistLightning' id='ResistLightning' size="6"></label>
                    </td>
                    <td>
                        <label>耐水+&nbsp;<input type='text' name='ResistWater' id='ResistWater' size="6"></label>
                    </td>
                    <td>
                        <label>耐光+&nbsp;<input type='text' name='ResistLight' id='ResistLight' size="6"></label>
                    </td>
                    <td>
                        <label>耐闇+&nbsp;<input type='text' name='ResistDark' id='ResistDark' size="6"></label>
                    </td>
                </tr>
            </table>
            <table width="100%" border="1">
                <tr>
                    <td width="33%">
                        <label>命中+&nbsp;<input type='text' name='Accuracy' id='Accuracy' size="6"></label>
                    </td>
                    <td width="33%">
                        <label>命中+&nbsp;<input type='text' name='AccuracyPercent' id='AccuracyPercent' size="6">%</label>
                    </td>
                    <td width="34%">
                        <label>命中+最大&nbsp;<input type='text' name='AccuracyMax' id='AccuracyMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>攻撃+&nbsp;<input type='text' name='Attack' id='Attack' size="6"></label>
                    </td>
                    <td>
                        <label>攻撃+&nbsp;<input type='text' name='AttackPercent' id='AttackPercent' size="6">%</label>
                    </td>
                    <td>
                        <label>攻撃+最大&nbsp;<input type='text' name='AttackMax' id='AttackMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>飛命+&nbsp;<input type='text' name='RangedAccuracy' id='RangedAccuracy' size="6"></label>
                    </td>
                    <td>
                        <label>飛命+&nbsp;<input type='text' name='RangedAccuracyPercent' id='RangedAccuracyPercent'size="6">%</label>
                    </td>
                    <td>
                        <label>飛命+最大&nbsp;<input type='text' name='RangedAccuracyMax' id='RangedAccuracyMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>飛攻+&nbsp;<input type='text' name='RangedAttack' id='RangedAttack' size="6"></label>
                    </td>
                    <td>
                        <label>飛攻+&nbsp;<input type='text' name='RangedAttackPercent' id='RangedAttackPercent' size="6">%</label>
                    </td>
                    <td>
                        <label>飛攻+最大&nbsp;<input type='text' name='RangedAttackMax' id='RangedAttackMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔命+&nbsp;<input type='text' name='MagicAccuracy' id='MagicAccuracy' size="6"></label>
                    </td>
                    <td>
                        <label>魔命+&nbsp;<input type='text' name='MagicAccuracyPercent' id='MagicAccuracyPercent'size="6">%</label>
                    </td>
                    <td>
                        <label>魔命+最大&nbsp;<input type='text' name='MagicAccuracyMax' id='MagicAccuracyMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔攻+&nbsp;<input type='text' name='MagicAttack' id='MagicAttack' size="6"></label>
                    </td>
                    <td>
                        <label>魔攻+&nbsp;<input type='text' name='MagicAttackPercent' id='MagicAttackPercent' size="6">%</label>
                    </td>
                    <td>
                        <label>魔攻+最大&nbsp;<input type='text' name='MagicAttackMax' id='MagicAttackMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>回避<input type='text' name='Evasion' id='Evasion' size="6"></label>
                    </td>
                    <td>
                        <label>回避+&nbsp;<input type='text' name='EvasionPercent' id='EvasionPercent' size="6">%</label>
                    </td>
                    <td>
                        <label>回避+最大&nbsp;<input type='text' name='EvasionMax' id='EvasionMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>防御&nbsp;<input type='text' name='Defense' id='Defense' size="6"></label>
                    </td>
                    <td>
                        <label>防御+&nbsp;<input type='text' name='DefensePercent' id='DefensePercent' size="6">%</label>
                    </td>
                    <td>
                        <label>防御+最大&nbsp;<input type='text' name='DefenseMax' id='DefenseMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔回避+&nbsp;<input type='text' name='MagicEvasion' id='MagicEvasion' size="6"></label>
                    </td>
                    <td>
                        <label>魔回避+&nbsp;<input type='text' name='MagicEvasionPercent' id='MagicEvasionPercent' size="6">%</label>
                    </td>
                    <td>
                        <label>魔回避+最大&nbsp;<input type='text' name='MagicEvasionMax' id='MagicEvasionMax' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>魔防+&nbsp;<input type='text' name='MagicDefense' id='MagicDefense' size="6"></label>
                    </td>
                    <td>
                        <label>魔防+&nbsp;<input type='text' name='MagicDefensePercent' id='MagicDefensePercent' size="6">%</label>
                    </td>
                    <td>
                        <label>魔防+最大&nbsp;<input type='text' name='MagicDefenseMax' id='MagicDefenseMax' size="6"></label>
                    </td>
                </tr>
            </table>
            <table width="100%" border="1">
                <tr>
                    <td>
                        <label>リジェネ&nbsp;<input type='text' name='Regene' id='Regene' size="6"></label>
                    </td>
                    <td>
                        <label>HP総回復量：&nbsp;<input type='text' name='HPtotal' id='HPtotal' size="6">%</label>
                    </td>
                    <td>
                        <label>リフレシュ+&nbsp;<input type='text' name='Refresh' id='Refresh' size="6"></label>
                    </td>
                    <td>
                        <label>MP総回復量：&nbsp;<input type='text' name='MPtotal' id='MPtotal' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>リゲイン+&nbsp;<input type='text' name='Regain' id='Regain' size="6"></label>
                    </td>
                    <td>
                        <label>TP総回復量：&nbsp;<input type='text' name='TPtotal' id='TPtotal' size="6">%</label>
                    </td>
                    <td>
                        <label>敵対心&nbsp;<input type='text' name='Enmity' id='Enmity' size="6"></label>
                    </td>
                    <td>
                        <label>ダブルアタック+&nbsp;<input type='text' name='DA' id='DA' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>トリプルアタック+&nbsp;<input type='text' name='TA' id='TA' size="6"></label>
                    </td>
                    <td>
                        <label>ストアTP+&nbsp;<input type='text' name='STP' id='STP' size="6"></label>
                    </td>
                    <td>
                        <label>モクシャ+&nbsp;<input type='text' name='SubtleBlow' id='SubtleBlow' size="6"></label>
                    </td>
                    <td>
                        <label>マジックバーストダメージII+&nbsp;<input type='text' name='MB2' id='MB2' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>ファストキャスト+&nbsp;<input type='text' name='FCpercent' id='FCpercent' size="6"></label>
                    </td>
                    <td>
                        <label>カウンター+&nbsp;<input type='text' name='Counter' id='Counter' size="6"></label>
                    </td>
                    <td>
                        <label>プラントイドキラー+&nbsp;<input type='text' name='Plantoid' id='Plantoid' size="6"></label>
                    </td>
                    <td>
                        <label>ビーストキラー+&nbsp;<input type='text' name='Beast' id='Beast' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>アルカナキラー+&nbsp;<input type='text' name='Arcana' id='Arcana' size="6"></label>
                    </td>
                    <td>
                        <label>アクアンキラー+&nbsp;<input type='text' name='Aqan' id='Aqan' size="6"></label>
                    </td>
                    <td>
                        <label>デーモンキラー+&nbsp;<input type='text' name='Demon' id='Demon' size="6"></label>
                    </td>
                    <td>
                        <label>アンデッドキラー+&nbsp;<input type='text' name='Undead' id='Undead' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>リザードキラー+&nbsp;<input type='text' name='Lizard' id='Lizard' size="6"></label>
                    </td>
                    <td>
                        <label>ヴァーミンキラー+&nbsp;<input type='text' name='Vermin' id='Vermin' size="6"></label>
                    </td>
                    <td>
                        <label>ドラゴンキラー+&nbsp;<input type='text' name='Dragon' id='Dragon' size="6"></label>
                    </td>
                    <td>
                        <label>バードキラー+&nbsp;<input type='text' name='Bird' id='Bird' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>レジストスロウ+&nbsp;<input type='text' name='Slow' id='Slow' size="6"></label>
                    </td>
                    <td>
                        <label>レジストスリープ<input type='text' name='Sleep' id='Sleep' size="6"></label>
                    </td>
                    <td>
                        <label>レジストサイレス+&nbsp;<input type='text' name='Silence' id='Silence' size="6"></label>
                    </td>
                    <td>
                        <label>レジストスタン+&nbsp;<input type='text' name='Stun' id='Stun' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>レジストウィルス+&nbsp;<input type='text' name='Virus' id='Virus' size="6"></label>
                    </td>
                    <td>
                        <label>レジストポイズン+&nbsp;<input type='text' name='Poison' id='Poison' size="6"></label>
                    </td>
                    <td>
                        <label>レジストブライン+&nbsp;<input type='text' name='Blind' id='Blind' size="6"></label>
                    </td>
                    <td>
                        <label>レジストパライズ+&nbsp;<input type='text' name='Paralyze' id='Paralyze' size="6"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>レジストペトリ+&nbsp;<input type='text' name='Petrify' id='Petrify' size="6"></label>
                    </td>
                    <td>
                        <label>レジストカーズ+&nbsp;<input type='text' name='Curse' id='Curse' size="6"></label>
                    </td>
                    <td>
                        <label>レジストアムネジア+&nbsp;<input type='text' name='Amnesia' id='Amnesia' size="6"></label>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>ヒーリングHP+&nbsp;<input type='text' name='HHP' id='HHP' size="6"></label>
                    </td>
                    <td>
                        <label>ヒーリングMP+&nbsp;<input type='text' name='HMP' id='HMP' size="6"></label>
                    </td>
                    <td>
                        <label>合成成功率+&nbsp;<input type='text' name='SynthesisSuccessRate' id='SynthesisSuccessRate' size="6">%</label>
                    </td>
                    <td>
                        <label>合成スキル上昇率+&nbsp;<input type='text' name='SyntheticSkillIncreaseRate'
                                id='SyntheticSkillIncreaseRate' size="6">%</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>合成素材消失率&nbsp;<input type='text' name='SyntheticMaterialLossRate'
                                id='SyntheticMaterialLossRate' size="6">%</label>
                    </td>
                    <td>
                        <label>ハイクォリティー成功率+&nbsp;<input type='text' name='HQSuccessRate' id='HQSuccessRate' size="6"></label>
                    </td>
                    <td>
                        <label>戦闘スキル上昇率x&nbsp;<input type='text' name='BattleSkillIncreaseRate'
                                id='BattleSkillIncreaseRate' size="6">%</label>
                    </td>
                    <td>
                        <label>魔法スキル上昇率x&nbsp;<input type='text' name='MagicSkillIncreaseRate'
                                id='MagicSkillIncreaseRate' size="6">%</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>釣りスキル上昇率+&nbsp;<input type='text' name='FishingSkillIncreaseRate'
                                id='FishingSkillIncreaseRate' size="6"></label>
                    </td>
                    <td>
                        <label>時間&nbsp;<input type='text' name='Time' id='Time' size="6"></label>
                    </td>
                    <td>
                        </label>註記：<br />
                        <label><textarea name='Note' id='Note' cols="30" rows="2"></textarea></label>
                    </td>
                    <td align="center">
                        <button type="submit">送出</button>
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
