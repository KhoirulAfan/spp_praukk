<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = ['id','tgl_bayar','juml_bayar','petugas_id','siswa_id','spp_id'];
    public function siswa():BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
    public function petugas()
    {
        return $this->belongsTo(User::class);
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
