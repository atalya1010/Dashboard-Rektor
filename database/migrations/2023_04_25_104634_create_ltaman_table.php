<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLtamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ltaman', function (Blueprint $table) {
            $table->id();
            $table->string('itembarang');
            $table->string('kodeaset');
            $table->integer('jumlahunit');
            $table->string('nopr');
            $table->string('nopo');
            $table->double('nilaiinvoice');
            $table->string('sumberdana');
            $table->double('nilaibuku');
            $table->string('lokasi');
            $table->string('alasan');
            $table->string('unit');
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
        Schema::dropIfExists('ltaman');
    }
}
