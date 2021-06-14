<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal_pertandingan";
    protected $fillable = ['tanggal_pertandingan','waktu_pertandingan','tim_tuan_rumah','tim_tamu'];
}
