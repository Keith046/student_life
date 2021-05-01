<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landlord_id');
            $table->string('apartment_name');
            $table->string('address');
            $table->string('city')->default('Belmopan');
            $table->string('country')->default('Belize');
            $table->string('phone');
            $table->string('description');
            $table->string('status');
            $table->decimal('price');
            $table->string('image')->default('apartment.png');
            $table->decimal('latitude')->nullable();;
            $table->decimal('longitude')->nullable();;
            $table->timestamps();

            $table->foreign('landlord_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            
        });
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('housings');
    }
}
