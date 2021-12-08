<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osis', function (Blueprint $table) {
            $table->id();
            $table->string('id', 45);
            $table->string('nama', 150);
            $table->date('tanggallahir');
            $table->string('alamat',255);
            $table->integer('phone',255);
            $table->primary('id');
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
        Schema::dropIfExists('osis');
    }
}
