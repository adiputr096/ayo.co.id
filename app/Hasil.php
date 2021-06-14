<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = 'hasil_pertandingan';
    protected $fillable = ['skor_hasil','pemain_cetak_gol','waktu_gol'];
}
