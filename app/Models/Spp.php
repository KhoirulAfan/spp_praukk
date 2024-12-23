<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Spp extends Model
{   
    protected $table = 'spp';
    protected $fillable = [
        'tahun',
        'nominal'
    ];
    public function siswa():HasMany
    {
        return $this->hasMany(Siswa::class,'id_spp');
    }
    public function pembayaran(){
        return $this->hasMany(Pembayaran::class);
    }
}
