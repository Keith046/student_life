<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('tutoring_id');
            $table->unsignedBigInteger('tutor_id');
            $table->unsignedBigInteger('student_id');
            
          
          
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
                
            $table->foreign('tutor_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tutoring_id')->references('id')->on('tutorings')
                ->onUpdate('cascade')->onDelete('cascade');    
            $table->primary(['student_id', 'tutoring_id', 'tutor_id']);   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_sessions');
    }
}
