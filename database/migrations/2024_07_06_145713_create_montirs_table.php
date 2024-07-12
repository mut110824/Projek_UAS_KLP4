<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMontirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montirs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->unique();
            $table->string('nama')->unique();
            $table->string('gender');
            $table->string('tgl_lahir');
            $table->string('tmp_lahir');
            $table->string('keahlian');
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
        Schema::dropIfExists('montirs');
    }
}