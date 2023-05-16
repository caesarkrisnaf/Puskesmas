<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll(){
        return [
            ['nama' => 'Udin','jk' => 'l', 'tgl_lahir' => '12/12/2012', 'alamat' => 'Serang', 'telp' => '08123323447'],
            ['nama' => 'Jaka','jk' => 'l', 'tgl_lahir' => '14/09/2010', 'alamat' => 'Yogyakarta','telp' => '0895020321'],
            ['nama' => 'Salsa','jk' => 'p', 'tgl_lahir' => '14/10/2007', 'alamat' => 'Depok','telp' => '0898248182381'],  
        ];
    }
}
