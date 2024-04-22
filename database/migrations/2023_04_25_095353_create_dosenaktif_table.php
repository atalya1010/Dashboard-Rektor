<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenaktifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosenaktif', function (Blueprint $table) {
            $table->id();
            $table->string('namaDosen');
            $table->string('nidn');
            $table->string('prodi');
            $table->string('jabatanAkademik');
            $table->string('golonganKepangkatan');
            $table->string('jalur_masuk');
            $table->string('statusIkatan');
            $table->string('aktifStart');
            $table->string('aktifEnd');
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
        Schema::dropIfExists('dosenaktif');
    }
}
