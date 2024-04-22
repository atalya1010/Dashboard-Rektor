<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asrama', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('keasramaanID');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('asrama');
            $table->string('asal');
            $table->string('notelp');
            $table->date('aktifstart');
            $table->date('aktifend');
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
        Schema::dropIfExists('asrama');
    }
}
