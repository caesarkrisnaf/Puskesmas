<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    //method untuk menampilkan data semua pasien
    public function index()
    {
        $pasiens = Pasien::all();

        return view('admin.pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('admin.pasien.create');
    }


    //untuk menangani submit form tambah pasien
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | max:500',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);

        //insert data ke table pasiens 
        Pasien::create([
            //field di table => nilai yang ingin diisi
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' => $request->telp
        ]);

        return redirect('/pasien');
    }

    public function edit($id)
    {
        //mendapatkan pasien berdasarkan id
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    public function update($id, Request $request)
    {
        $validateData =  $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | max:500',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);

        //cari pasien yang akan diupdate
        $pasien = Pasien::find($id);

        //update pasien berdasarkan data validasi
        $pasien->update($validateData);

        return redirect('/pasien')->with('success', 'Data Berhasil diubah');
    }

    public function destroy(Request $request)
    {
        Pasien::destroy($request->id);

        return redirect('/pasien')->with('success', 'Data Pasien Berhasil dihapus');
    }
}
