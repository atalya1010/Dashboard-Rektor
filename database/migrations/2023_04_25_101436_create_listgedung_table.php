<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblListgedungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_listgedung', function (Blueprint $table) {
            $table->id();
            $table->string('penomoran');
            $table->string('namagedung');
            $table->string('namaruangan');
            $table->integer('kapasitasruangan');
            $table->string('lokasimeja');
            $table->string('namapemakai');
            $table->integer('terisi');
            $table->string('ketersediaan');
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
        Schema::dropIfExists('tbl_listgedung');
    }
}
