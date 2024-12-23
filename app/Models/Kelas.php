<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Kelas extends Model
{    
    protected $table = 'kelas';
    protected $fillable = [
        'id',
        'nama_kelas',
        'kompetensi_keahlian'
    ];
    public function siswa():hasMany
    {
        return $this->hasMany(Siswa::class);
    }
}
