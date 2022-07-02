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
        Schema::create('branch', static function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name-branch');
            $table->string('name-owner-branch');
            $table->integer('id-tube');
            $table->string('count-tubes');
            $table->integer('id-employee');
            $table->integer('id-customer');
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
        Schema::drop('branch');
    }
};
