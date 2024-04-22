<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosentugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosentugas', function (Blueprint $table) {
            $table->id();
            $table->string('namaDosen');
            $table->string('nidn');
            $table->string('prodi');
            $table->string('lokasi');
            $table->string('program');
            $table->string('programStudi');
            $table->string('mulaiTugas');
            $table->string('rencanaAktif');
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
        Schema::dropIfExists('dosentugas');
    }
}
