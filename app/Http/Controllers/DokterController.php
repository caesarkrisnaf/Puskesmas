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

    $request->validate([
        'nama' => 'required | min:3',
        'spesialis' => 'required',
        'alamat' => 'required | max:500',
        'no_telp' => 'required | numeric | digits_between:10,14',

    ]);
        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/dokter');
   }

   public function edit($id)
   {
       $dokter = Dokter::find($id);
       return view('admin.dokter.edit',[
        'dokter' => $dokter
       ]); 
   }

   public function update($id, Request $request)
   {
        
     $validateData = $request->validate([
        'nama' => 'required | min:3',
        'spesialis' => 'required',
        'alamat' => 'required | max:500',
        'no_telp' => 'required | numeric | digits_between:10,14',
    ]);
    
    $dokter = Dokter::find($id);
    $dokter->update($validateData);

    return redirect('/dokter')->with('success', 'Data Berhasil Diubah');

   }

   public function destroy(Request $request)
   {
        Dokter::destroy($request->id);
        return redirect('/dokter')->with('success','Data Berhasil Dihapus');
   }
}
