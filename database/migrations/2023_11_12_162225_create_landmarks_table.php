<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->text('preview_image');
            $table->text('title');
            $table->text('description');
            $table->text('location');
            $table->text('map_x')->nullable();
            $table->text('map_y')->nullable();
            $table->text('status');
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
        Schema::dropIfExists('landmarks');
    }
};
