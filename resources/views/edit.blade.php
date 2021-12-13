@extends('template')
@section('title','Edit Stock')

@section('isi')
    <div id="box-dua" class="artikel" style="text-align:center" >
        <h3>Edit Stock</h3>
    </div>


    <div id="card">
            <form method="post" action="/edit/{{ $stock->id}}" >
              @method('patch')
              @csrf
                <label class='labelan' for='nama_barang'>Nama Barang</label><br>
                <input class='inputan' id='nama_barang' name='nama_barang' type="text" value="{{$stock->nama_barang}}" required autofocus><br>

                <label class='labelan' for='jenis_barang'>Jenis Barang</label><br>
                <input class='inputan' id='jenis_barang' name='jenis_barang' type="text" value="{{$stock->jenis_barang}}" required autofocus><br>

                <label class='labelan' for='jumlah_barang'>Jumlah Barang</label><br>
                <input class='inputan' id='jumlah_barang' name='jumlah_barang' type="number" value="{{$stock->jumlah_barang}}" required autofocus><br>
             
                <label class='labelan' for='keterangan'>Keterangan</label><br>
                <input class='inputan' id='keterangan' name='keterangan' type="text" value="{{$stock->keterangan}}" required autofocus><br>
                
                <button class="btn" type="submit" name="submit" value="Simpan" >Update</button>
                <button href="/viewStock" class="btn"  >Kembali</button>

            </form>
    </div>
@endsection