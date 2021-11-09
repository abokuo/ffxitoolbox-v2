<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->enum('guild',['木工','鍛冶','彫金','裁縫','革細工','骨細工','錬金術','調理','未知']);
            $table->enum('skillrank',['素人','見習','徒弟','下級','名取','目録','印可','高弟','皆伝','師範','高級','未知']);
            $table->string('name', 30);
            $table->string('skill', 50);
            $table->enum('crystal', ['炎','土','水','風','氷','雷','光','闇','灼熱','凍結','旋風','大地','稲妻','泉水','斜光','常闇']);
            $table->string('material1', 30);
            $table->string('material2', 30)->nullable();
            $table->string('material3', 30)->nullable();
            $table->string('material4', 30)->nullable();
            $table->string('material5', 30)->nullable();
            $table->string('material6', 30)->nullable();
            $table->string('material7', 30)->nullable();
            $table->string('material8', 30)->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
