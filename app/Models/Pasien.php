<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    //hubungkan model ke table pasiens 
    protected $table = 'pasiens';

    protected $primaryKey = 'id';

    //menyebutkan field yang boleh diisi
    protected $fillable = ['nama', 'jk', 'tgl_lahir', 'alamat', 'telp','dokter_id'];

    public function Dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
