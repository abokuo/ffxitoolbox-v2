<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodresults', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 30);
            $table->string('Time', 20);
            $table->string('Class', 20);
            $table->text('Note');
            $table->smallInteger('Regene')->nullable();
            $table->smallInteger('Refresh')->nullable();
            $table->smallInteger('Regain')->nullable();
            $table->smallInteger('HPtotal')->nullable();
            $table->smallInteger('Mptotal')->nullable();
            $table->smallInteger('Tptotal')->nullable();
            $table->smallInteger('HP')->nullable();
            $table->tinyInteger('HPpercent')->nullable();
            $table->smallInteger('HPmax')->nullable();
            $table->smallInteger('MP')->nullable();
            $table->tinyInteger('MPpercent')->nullable();
            $table->smallInteger('MPmax')->nullable();
            $table->tinyInteger('STR')->nullable();
            $table->tinyInteger('DEX')->nullable();
            $table->tinyInteger('VIT')->nullable();
            $table->tinyInteger('AGI')->nullable();
            $table->tinyInteger('INT')->nullable();
            $table->tinyInteger('MND')->nullable();
            $table->tinyInteger('CHR')->nullable();
            $table->tinyInteger('ResistFire')->nullable();
            $table->tinyInteger('ResistIce')->nullable();
            $table->tinyInteger('ResistWind')->nullable();
            $table->tinyInteger('ResistEarth')->nullable();
            $table->tinyInteger('ResistLightning')->nullable();
            $table->tinyInteger('ResistWater')->nullable();
            $table->tinyInteger('ResistLight')->nullable();
            $table->tinyInteger('ResistDark')->nullable();
            $table->smallInteger('Accuracy')->nullable();
            $table->tinyInteger('AccuracyPercent')->nullable();
            $table->smallInteger('AccuracyMax')->nullable();
            $table->smallInteger('RangedAccuracy')->nullable();
            $table->smallInteger('Attack')->nullable();
            $table->tinyInteger('AttackPercent')->nullable();
            $table->smallInteger('AttackMax')->nullable();
            $table->smallInteger('RangedAccuracyPercent')->nullable();
            $table->tinyInteger('RangedAccuracyMax')->nullable();
            $table->smallInteger('RangedAttack')->nullable();
            $table->tinyInteger('RangedAttackPercent')->nullable();
            $table->smallInteger('RangedAttackMax')->nullable();
            $table->smallInteger('MagicAccuracy')->nullable();
            $table->tinyInteger('MagicAccuracyPercent')->nullable();
            $table->smallInteger('MagicAccuracyMax')->nullable();
            $table->smallInteger('MagicAttack')->nullable();
            $table->tinyInteger('MagicAttackPercent')->nullable();
            $table->smallInteger('MagicAttackMax')->nullable();
            $table->smallInteger('Evasion')->nullable();
            $table->tinyInteger('EvasionPercent')->nullable();
            $table->smallInteger('EvasionMax')->nullable();
            $table->smallInteger('Defense')->nullable();
            $table->tinyInteger('DefensePercent')->nullable();
            $table->smallInteger('DefenseMax')->nullable();
            $table->smallInteger('MagicEvasion')->nullable();
            $table->tinyInteger('MagicEvasionPercent')->nullable();
            $table->smallInteger('MagicEvasionMax')->nullable();
            $table->smallInteger('MagicDefense')->nullable();
            $table->tinyInteger('MagicDefensePercent')->nullable();
            $table->smallInteger('MagicDefenseMax')->nullable();
            $table->tinyInteger('Enmity')->nullable();
            $table->tinyInteger('DA')->nullable();
            $table->tinyInteger('TA')->nullable();
            $table->tinyInteger('STP')->nullable();
            $table->tinyInteger('SubtleBlow')->nullable();
            $table->tinyInteger('MB2')->nullable();
            $table->tinyInteger('FCpercent')->nullable();
            $table->tinyInteger('Counter')->nullable();
            $table->tinyInteger('Plantoid')->nullable();
            $table->tinyInteger('Beast')->nullable();
            $table->tinyInteger('Arcana')->nullable();
            $table->tinyInteger('Aquan')->nullable();
            $table->tinyInteger('Demon')->nullable();
            $table->tinyInteger('Undead')->nullable();
            $table->tinyInteger('Lizard')->nullable();
            $table->tinyInteger('Vermin')->nullable();
            $table->tinyInteger('Dragon')->nullable();
            $table->tinyInteger('Amorph')->nullable();
            $table->tinyInteger('Bird')->nullable();
            $table->tinyInteger('Slow')->nullable();
            $table->tinyInteger('Sleep')->nullable();
            $table->tinyInteger('Silence')->nullable();
            $table->tinyInteger('Stun')->nullable();
            $table->tinyInteger('Virus')->nullable();
            $table->tinyInteger('Poison')->nullable();
            $table->tinyInteger('Blind')->nullable();
            $table->tinyInteger('Paralyze')->nullable();
            $table->tinyInteger('Petrify')->nullable();
            $table->tinyInteger('Curse')->nullable();
            $table->tinyInteger('Amnesia')->nullable();
            $table->tinyInteger('HHP')->nullable();
            $table->tinyInteger('HMP')->nullable();
            $table->tinyInteger('SynthesisSuccessRate')->nullable();
            $table->tinyInteger('SyntheticSkillIncreaseRate')->nullable();
            $table->tinyInteger('SyntheticMaterialLossRate')->nullable();
            $table->tinyInteger('HQSuccessRate')->nullable();
            $table->unsignedTinyInteger('BattleSkillIncreaseRate')->nullable();
            $table->unsignedTinyInteger('MagicSkillIncreaseRate')->nullable();
            $table->unsignedTinyInteger('FishingSkillIncreaseRate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foodresults');
    }
}
