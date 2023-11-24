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
        Schema::create('ownership_transfers', function (Blueprint $table) {
            $table->id();
            $table->string('landlord_phone');
            $table->string('new_owner_name');
            $table->string('new_owner_phone');
            $table->string('national_id');
            $table->string('property_number');
            $table->string('municipality_name');
            $table->string('basin');
            $table->string('district');
            $table->string('land_number');
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
        Schema::dropIfExists('ownership_transfers');
    }
};
