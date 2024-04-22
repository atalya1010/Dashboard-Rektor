<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKapasitasruangankelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapasitasruangankelas', function (Blueprint $table) {
            $table->id();
            $table->string('ruangan', 15);
            $table->text('keterangan')->nullable();
            $table->integer('luas');
            $table->integer('kapasitasnormal');
            $table->integer('perkiraan');
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
        Schema::dropIfExists('kapasitasruangankelas');
    }
}
