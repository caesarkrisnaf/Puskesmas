<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    
    public static function getAll()
    {
        return [
            ['nama' => 'Joko', 'spesialis' => 'Dokter Spesialis Penyakit Dalam', 'alamat' => 'Bogor', 'no_telp' => '08982123'],
            ['nama' => 'Wahyu', 'spesialis' => 'Dokter Spesialis Anak', 'alamat' => 'Jakarta', 'no_telp' => '021903921'],
            ['nama' => 'Ratna', 'spesialis' => 'Dokter Spesialis Bedah', 'alamat' => 'Surabaya', 'no_telp' => '0899828312'],

        ];
    }
    

}
