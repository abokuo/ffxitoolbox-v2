@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxi, 食物效果')
@section('meta_description', '顯示 ffxi 食物效果')
@section('title', $title)
@section('nav_foodresults', 'active')
@section('content')
<!-- Content Start -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <p>點選名稱開新瀏覽器視窗前往<a href="http://wiki.ffo.jp" target="_blank">FF11用語辞典 ～ ウィンダスの仲間たち版</a>觀看明細</p>
            <table width="100%" border="1">
                <tr bgcolor="#eeeeee">
                    <th>食物</th>
                    <th>說明</th>
                </tr>

                @foreach($foodresults as $foodresult)
                    <tr>
                        <td width="16%">
                            <a name="{{ $foodresult->id }}">
                            <a href='http://wiki.ffo.jp/search.cgi?imageField.x=0&imageField.y=0&CCC=%E6%84%9B&Command=Search&qf={!! $foodresult->Name !!}&order=match&ffotype=title&type=title' target='_blank'>{{ $foodresult->Name }}</a>
                            @if(session()->has('user_id') && session('user_id') == 1)
                                <br />
                                <a href="/foodresult/{{ $foodresult->id }}/edit">編輯</a>
                                &nbsp;&nbsp;
                                <a href="/foodresult/{{ $foodresult->id }}" onClick="return confirm('確定要刪除嗎？')">刪除</a>
                            @endif
                        </td>
                        <td>【{{  $foodresult->Class  }}】{!!  $foodresult->Note  !!}<br />
                            @if(@isset($foodresult->HP))
                                @if($foodresult->HP < 0)
                                    HP{{ $foodresult->HP }}&nbsp;
                                @else
                                    HP+{{ $foodresult->HP }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->HPpercent) && @isset($foodresult->HPmax))
                                HP+{{ $foodresult->HPpercent }}%(最大 {{ $foodresult->HPmax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->MP))
                                @if($foodresult->MP < 0)
                                    MP{{ $foodresult->MP }}&nbsp;
                                @else
                                    MP+{{ $foodresult->MP }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->MPpercent) && @isset($foodresult->MPmax))
                                HP+{{ $foodresult->MPpercent }}%(最大 {{ $foodresult->MPmax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->STR))
                                @if($foodresult->STR < 0)
                                    STR{{ $foodresult->STR }}&nbsp;
                                @else
                                    STR+{{ $foodresult->STR }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->DEX))
                                @if($foodresult->DEX < 0)
                                    DEX{{ $foodresult->DEX }}&nbsp;
                                @else
                                    DEX+{{ $foodresult->DEX }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->VIT))
                                @if($foodresult->VIT < 0)
                                    VIT{{ $foodresult->VIT }}&nbsp;
                                @else
                                    VIT+{{ $foodresult->VIT }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->AGI))
                                @if($foodresult->AGI < 0)
                                    AGI{{ $foodresult->AGI }}&nbsp;
                                @else
                                    AGI+{{ $foodresult->AGI }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->INT))
                                @if($foodresult->INT < 0)
                                    INT{{ $foodresult->INT }}&nbsp;
                                @else
                                    INT+{{ $foodresult->INT }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->MND))
                                @if($foodresult->MND < 0)
                                    MND{{ $foodresult->MND }}&nbsp;
                                @else
                                    MND+{{ $foodresult->MND }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->CHR))
                                @if($foodresult->CHR < 0)
                                    CHR{{ $foodresult->CHR }}&nbsp;
                                @else
                                    CHR+{{ $foodresult->CHR }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->ResistFire))
                                耐火+{{ $foodresult->ResistFire }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistIce))
                                耐氷+{{ $foodresult->ResistIce }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistWind))
                                耐風+{{ $foodresult->ResistWind }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistEarth))
                                耐土+{{ $foodresult->ResistEarth }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistLightning))
                                耐雷+{{ $foodresult->ResistLightning }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistWater))
                                耐水+{{ $foodresult->ResistWater }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistLight))
                                耐光+{{ $foodresult->ResistLight }}&nbsp;
                            @endif
                            @if(@isset($foodresult->ResistDark))
                                耐闇+{{ $foodresult->ResistDark }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Accuracy))
                                命中+{{ $foodresult->Accuracy }}&nbsp;
                            @endif
                            @if(@isset($foodresult->AccuracyPercent) && @isset($foodresult->AccuracyMax))
                                命中+{{ $foodresult->AccuracyPercent }}%(最大 {{ $foodresult->AccuracyMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->Attack))
                                攻撃+{{ $foodresult->Attack }}&nbsp;
                            @endif
                            @if(@isset($foodresult->AttackPercent) && @isset($foodresult->AttackMax))
                                攻撃+{{ $foodresult->AttackPercent }}%(最大 {{ $foodresult->AttackMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->RangedAccuracy))
                                飛命+{{ $foodresult->RangedAccuracy }}&nbsp;
                            @endif
                            @if(@isset($foodresult->RangedAccuracyPercent) && @isset($foodresult->RangedAccuracyMax))
                                飛命+{{ $foodresult->RangedAccuracyPercent }}%(最大 {{ $foodresult->RangedAccuracyMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->RangedAttack))
                                飛攻+{{ $foodresult->RangedAttack }}&nbsp;
                            @endif
                            @if(@isset($foodresult->RangedAttackPercent) && @isset($foodresult->RangedAttackMax))
                                飛攻+{{ $foodresult->RangedAttackPercent }}%(最大 {{ $foodresult->RangedAttackMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicAccuracy))
                                魔命+{{ $foodresult->MagicAccuracy }}&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicAccuracyPercent) && @isset($foodresult->MagicAccuracyMax))
                                魔命+{{ $foodresult->MagicAccuracyPercent }}%(最大 {{ $foodresult->MagicAccuracyMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicAttack))
                                魔攻+{{ $foodresult->MagicAttack }}&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicAttackPercent) && @isset($foodresult->MagicAttackMax))
                                魔攻+{{ $foodresult->MagicAttackPercent }}%(最大 {{ $foodresult->MagicAttackMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->Evasion))
                                @if($foodresult->Evasion < 0)
                                    回避{{ $foodresult->Evasion }}&nbsp;
                                @else
                                    回避+{{ $foodresult->Evasion }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->EvasionPercent) && @isset($foodresult->EvasionMax))
                                回避+{{ $foodresult->EvasionPercent }}%(最大 {{ $foodresult->EvasionMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->Defense))
                                @if($foodresult->Defense < 0)
                                    防御{{ $foodresult->Defense }}&nbsp;
                                @else
                                    防御+{{ $foodresult->Defense }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->DefensePercent) && @isset($foodresult->DefenseMax))
                                防御+{{ $foodresult->DefensePercent }}%(最大 {{ $foodresult->DefenseMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicEvasion))
                                魔回避+{{ $foodresult->MagicEvasion }}&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicEvasionPercent) && @isset($foodresult->MagicEvasionMax))
                                魔回避+{{ $foodresult->MagicEvasionPercent }}%(最大 {{ $foodresult->MagicEvasionMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicDefense))
                                魔防+{{ $foodresult->MagicDefense }}&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicDefensePercent) && @isset($foodresult->MagicDefenseMax))
                                魔防+{{ $foodresult->MagicDefensePercent }}%(最大 {{ $foodresult->MagicDefenseMax }})&nbsp;
                            @endif
                            @if(@isset($foodresult->Regene))
                                @if($foodresult->Regene < 0)
                                    リジェネ{{ $foodresult->Regene }}&nbsp;
                                @else
                                    リジェネ+{{ $foodresult->Regene }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->HPtotal))
                                HP総回復量：{{ $foodresult->HPtotal }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Refresh))
                                リフレシュ+{{ $foodresult->Refresh }}&nbsp;
                            @endif
                            @if(@isset($foodresult->MPtotal))
                                MP総回復量：{{ $foodresult->MPtotal }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Regain))
                                リゲイン+{{ $foodresult->Regain }}&nbsp;
                            @endif
                            @if(@isset($foodresult->TPtotal))
                                TP総回復量：{{ $foodresult->TPtotal }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Enmity))
                                @if($foodresult->Enmity < 0)
                                    敵対心{{ $foodresult->Enmity }}&nbsp;
                                @else
                                    敵対心+{{ $foodresult->Enmity }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->DA))
                                ダブルアタック+{{ $foodresult->DA }}&nbsp;
                            @endif
                            @if(@isset($foodresult->TA))
                                トリプルアタック+{{ $foodresult->TA }}&nbsp;
                            @endif
                            @if(@isset($foodresult->STP))
                                ストアTP+{{ $foodresult->STP }}&nbsp;
                            @endif
                            @if(@isset($foodresult->SubtleBlow))
                                モクシャ+{{ $foodresult->SubtleBlow }}&nbsp;
                            @endif
                            @if(@isset($foodresult->MB2))
                                マジックバーストダメージII+{{ $foodresult->MB2 }}&nbsp;
                            @endif
                            @if(@isset($foodresult->FCpercent))
                                ファストキャスト+{{ $foodresult->FCpercent }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Counter))
                                カウンター+{{ $foodresult->Counter }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Plantoid))
                                プラントイドキラー+{{ $foodresult->Plantoid }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Beast))
                                ビーストキラー+{{ $foodresult->PBeast }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Arcana))
                                アルカナキラー+{{ $foodresult->Arcana }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Aqan))
                                アクアンキラー+{{ $foodresult->Aqan }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Demon))
                                デーモンキラー+{{ $foodresult->Demon }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Undead))
                                アンデッドキラー+{{ $foodresult->Undead }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Lizard))
                                リザードキラー+{{ $foodresult->Lizard }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Vermin))
                                ヴァーミンキラー+{{ $foodresult->Vermin }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Dragon))
                                ドラゴンキラー+{{ $foodresult->Dragon }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Bird))
                                バードキラー+{{ $foodresult->Bird }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Slow))
                                レジストスロウ+{{ $foodresult->Slow }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Sleep))
                                @if($foodresult->Sleep < 0)
                                    レジストスリープ{{ $foodresult->Sleep }}&nbsp;
                                @else
                                    レジストスリープ+{{ $foodresult->Sleep }}&nbsp;
                                @endif
                            @endif
                            @if(@isset($foodresult->Silence))
                                レジストサイレス+{{ $foodresult->Silence }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Stun))
                                レジストスタン+{{ $foodresult->Stun }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Virus))
                                レジストウィルス+{{ $foodresult->Virus }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Poison))
                                レジストポイズン+{{ $foodresult->Poison }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Blind))
                                レジストブライン+{{ $foodresult->Blind }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Paralyze))
                                レジストパライズ+{{ $foodresult->Paralyze }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Petrify))
                                レジストペトリ+{{ $foodresult->Petrify }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Curse))
                                レジストカーズ+{{ $foodresult->Curse }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Amnesia))
                                レジストアムネジア+{{ $foodresult->Amnesia }}&nbsp;
                            @endif
                            @if(@isset($foodresult->HHP))
                                ヒーリングHP+{{ $foodresult->HHP }}&nbsp;
                            @endif
                            @if(@isset($foodresult->HMP))
                                ヒーリングMP+{{ $foodresult->HMP }}&nbsp;
                            @endif
                            @if(@isset($foodresult->SynthesisSuccessRate))
                                合成成功率+{{ $foodresult->SynthesisSuccessRate }}%&nbsp;
                            @endif
                            @if(@isset($foodresult->SyntheticSkillIncreaseRate))
                                合成スキル上昇率+{{ $foodresult->SyntheticSkillIncreaseRate }}%&nbsp;
                            @endif
                            @if(@isset($foodresult->SyntheticMaterialLossRate))
                                合成素材消失率{{ $foodresult->SyntheticMaterialLossRate }}%&nbsp;
                            @endif
                            @if(@isset($foodresult->HQSuccessRate))
                                ハイクォリティー成功率+{{ $foodresult->HQSuccessRate }}&nbsp;
                            @endif
                            @if(@isset($foodresult->BattleSkillIncreaseRate))
                                戦闘スキル上昇率x{{ $foodresult->BattleSkillIncreaseRate }}%&nbsp;
                            @endif
                            @if(@isset($foodresult->MagicSkillIncreaseRate))
                                魔法スキル上昇率x{{ $foodresult->MagicSkillIncreaseRate }}%&nbsp;
                            @endif
                            @if(@isset($foodresult->FishingSkillIncreaseRate))
                                釣りスキル上昇率+{{ $foodresult->FishingSkillIncreaseRate }}&nbsp;
                            @endif
                            @if(@isset($foodresult->Time))
                                {{ $foodresult->Time }}
                            @endif
                        </td>
                    </tr>
                @endforeach
                </table>
                <p>{{ $foodresults->links() }} </p>
                <p align="right"><a href="#top">回頁首</a></p>


        </div>
    </section><!-- End About Us Section -->


<!-- Content End -->
@endsection
