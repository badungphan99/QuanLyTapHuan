<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('full_name')->nullable(false);
            $table->string('user_name')->nullable(false);
            $table->string('pass_word')->nullable(false);
            $table->string('unit');
            $table->string('email')->nullable(false);
            $table->string('other_email');
            $table->string('phone_number');
            $table->string('other_phone_number');
            $table->string('position');
            $table->string('academic_rank');
            $table->string('academic_degree');
            $table->string('note');
            $table->integer('role')->default(3);
            $table->boolean('status')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
