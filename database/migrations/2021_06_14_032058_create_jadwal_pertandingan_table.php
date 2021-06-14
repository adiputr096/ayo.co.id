<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPertandinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pertandingan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pertandingan');
            $table->time('waktu_pertandingan');
            $table->string('tim_tuan_rumah');
            $table->string('tim_tamu');
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
        Schema::dropIfExists('jadwal_pertandingan');
    }
}
