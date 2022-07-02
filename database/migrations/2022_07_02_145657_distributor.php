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
    public function up(): void
    {
        Schema::create('distributor', static function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('id-tube');
            $table->integer('id-store');
            $table->integer('id-driver');
            $table->integer('id-branch');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('distributor');
    }
};
