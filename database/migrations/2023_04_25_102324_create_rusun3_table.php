<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRusun3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rusun3', function (Blueprint $table) {
            $table->id();
            $table->string('nomorkamar');
            $table->string('namapenghuni');
            $table->string('jabatan');
            $table->integer('jumlahkamar');
            $table->integer('kapasitaskamar');
            $table->integer('istri');
            $table->integer('anak');
            $table->integer('dll');
            $table->integer('total');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('rusun3');
    }
}
