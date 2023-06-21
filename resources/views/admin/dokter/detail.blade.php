@extends('main')
@section('content')

    <div class="container">
        <table class="table">
            <thead>
                @php
                    $no=1;
                @endphp
                
              <tr>
                <th scope="col">No</th>
                <th scope="row">Nama Pasien</th>
                <th scope="row">Jenis Kelamin</th>
                <th scope="row">Tanggal Lahir</th>
                <th scope="row">Alamat</th>
                <th scope="row">No Telpon</th>
             
              </tr>
            </thead>
            <tbody>
              @foreach ($pasien as $p)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->jk}}</td>
                <td>{{$p->tgl_lahir}}</td>  
                <td>{{$p->alamat}}</td>
                <td>{{$p->telp}}</td>    
              </tr>
              @endforeach
            </tbody>
          </table>
             
        

    </div>
@endsection