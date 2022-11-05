<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String('sname');
            $table->String('password');
            $table->String('email');
            $table->String('sphone');
            $table->String('semester');
            $table->String('assmentor');
            $table->String('eno');
            $table->String('year');
            $table->String('dob');
            $table->String('branch');
            $table->String('pemail');
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
        Schema::dropIfExists('students');
    }
}
