<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guestbooks', function (Blueprint $table) {
            $table->id();
            $table->string('guestName');
            $table->string('guestSubject');
            $table->string('guestEmail')->nullable();
            $table->string('guestWebsite')->nullable();
            $table->text('guestComment');
            $table->text('adminReply')->nullable();
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
        Schema::dropIfExists('guestbooks');
    }
}
