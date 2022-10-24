<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaculty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
            $table->string('name');
            $table->string('gender');
            $table->string('address');
            $table->dateTime('birthday', $precision = 0);
            $table->string('contact');
            $table->string('fb')->nullable();
            $table->string('email');
            $table->string('position');
            $table->string('cstatus');
            $table->string('scheduleSY')->nullable();
            $table->double('latitude',100,14)->nullable();
            $table->double('longitude',100,14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty');
    }
}
