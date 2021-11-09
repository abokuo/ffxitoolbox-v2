<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscomposesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discomposes', function (Blueprint $table) {
            $table->id();
            $table->enum('guild',['獣人装備','特殊装備','合成装備(木工)','合成装備(鍛冶)','合成装備(彫金)','合成装備(裁縫)','合成装備(革細工)','合成装備(骨細工)','合成装備(錬金術)','リアセンブル','?']);
            $table->string('skillrank', 30)->default('隠し');
            $table->string('name', 30);
            $table->string('skill', 50);
            $table->enum('crystal', ['炎','土','水','風','氷','雷','光','闇','灼熱','凍結','旋風','大地','稲妻','泉水','斜光','常闇','?']);
            $table->string('material1', 30);
            $table->string('HQ1', 30)->nullable();
            $table->string('HQ2', 30)->nullable();
            $table->string('HQ3', 30)->nullable();
            $table->string('type1', 20);
            $table->text('item1');
            $table->string('type2', 20)->nullable();
            $table->text('item2')->nullable();
            $table->string('type3', 20)->nullable();
            $table->text('item3')->nullable();
            $table->string('type4', 20)->nullable();
            $table->text('item4')->nullable();
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
        Schema::dropIfExists('discomposes');
    }
}
