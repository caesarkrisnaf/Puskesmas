<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    
    protected $table = 'dokters';

    protected $primaryKey = 'id';
    
    //menyebutkan field yang boleh diisi
    protected $fillable = ['nama','spesialis','alamat','no_telp'];


    public function Pasien()
    {
        return $this->hasMany(Pasien::class);
    }

}
