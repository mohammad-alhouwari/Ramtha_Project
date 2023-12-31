<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('municipality_infos', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->text('description');
            $table->string('description_image');
            $table->string('email');
            $table->string('phone');
            $table->string('vision');
            $table->string('mission');
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
        Schema::dropIfExists('municipality_infos');
    }
};
