<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $table = "tim";
    protected $fillable = ['nama_tim', 'logo_tim', 'tahun_berdiri_tim', 'alamat_tim', 'kota_tim'];
}
