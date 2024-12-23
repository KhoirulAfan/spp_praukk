<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['id','nisn','nis','nama','alamat','no_telp','kelas_id'];


    public function kelas():BelongsTo
    {
        return $this->BelongsTo(Kelas::class);
    }
    public function pembayaran():HasMany
    {
        return $this->hasMany(Pembayaran::class);
    }
    
 }
