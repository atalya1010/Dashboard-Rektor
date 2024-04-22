<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistendosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistendosen', function (Blueprint $table) {
            $table->id();
            $table->string('namaasdos');
            $table->string('asdosID');
            $table->string('matakuliah');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('pendidikan');
            $table->integer('tahun');
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
        Schema::dropIfExists('asistendosen');
    }
}
