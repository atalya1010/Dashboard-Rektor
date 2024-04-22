<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateLjaringanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ljaringan', function (Blueprint $table) {
            $table->id();
            $table->string('itembarang');
            $table->string('tipebarang');
            $table->string('kodeaset');
            $table->integer('jumlahunit');
            $table->string('nopr');
            $table->string('nopo');
            $table->double('nilaiinvoice');
            $table->integer('umurekonomis');
            $table->double('depresiasi');
            $table->string('sumberdana');
            $table->double('akumulasidepresiasi');
            $table->double('nilaibuku');
            $table->string('lokasi');
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
        Schema::dropIfExists('ljaringan');
    }
}
