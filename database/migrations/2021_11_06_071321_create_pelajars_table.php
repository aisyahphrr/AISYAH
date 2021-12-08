<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajars', function (Blueprint $table) {
            $table->string('id', 45);
            $table->string('nama', 150);
            $table->date('tanggallahir');
            $table->string('alamat',255);
            $table->integer('phone',255);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelajars');
    }
}
