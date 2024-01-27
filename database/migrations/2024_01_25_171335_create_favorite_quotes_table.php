<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('quote_id');
            $table->timestamps();
        });

        Schema::table('favorite_quotes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('quote_id')->references('id')->on('quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_quotes');
    }
};
