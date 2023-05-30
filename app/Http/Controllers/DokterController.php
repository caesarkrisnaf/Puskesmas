<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();

        return view('admin.dokter.index', [
            'dokters' =>
            $dokters
        ]);
    }

    public function create()
    {
        return view('admin.dokter.create');
    }

    public function store(Request $request)
   {
        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/dokter');
   }

}
