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
            $table->string('unit')->nullable(true);
            $table->string('email')->nullable(false);
            $table->string('other_email')->nullable(true);
            $table->string('phone_number')->nullable(true);
            $table->string('other_phone_number')->nullable(true);
            $table->string('position')->nullable(true);
            $table->string('academic_rank')->nullable(true);
            $table->string('academic_degree')->nullable(true);
            $table->string('note')->nullable(true);
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
