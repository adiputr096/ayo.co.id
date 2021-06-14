<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $table = 'pemain';
    protected $fillable = ['nama_pemain','tinggi_badan','berat_badan','posisi_pemain','nomor_punggung'];
}
