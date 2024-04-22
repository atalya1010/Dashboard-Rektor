<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendarektorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendarektor', function (Blueprint $table) {
        $table->id();
        $table->string('namakegiatan');
        $table->string('penyelenggara');
        $table->string('lokasi');
        $table->date('tanggal');
        $table->time('waktu');
        $table->string('status');
        $table->text('keterangan');
        // Add other columns as needed
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
        Schema::dropIfExists('agendarektor');
    }
}
