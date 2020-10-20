<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enroll', function (Blueprint $table) {
            $table->foreign('class_id')->references('id')->on('course');
            $table->foreign('student_id')->references('id')->on('users');
        });

        Schema::table('teacher', function (Blueprint $table) {
            $table->foreign('class_id')->references('id')->on('course');
            $table->foreign('teacher_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enroll', function (Blueprint $table) {
            $table->dropForeign('class_id');
            $table->dropForeign('student_id');
        });

        Schema::table('teacher', function (Blueprint $table) {
            $table->dropForeign('class_id');
            $table->dropForeign('teacher_id');
        });
    }
}
