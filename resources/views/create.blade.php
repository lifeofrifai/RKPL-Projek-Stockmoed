@extends('template')
@section('title','Create New Stock')

@section('isi')
    <div id="box-dua" class="artikel" style="text-align:center" >
        <h3>Create New Stock</h3>
    </div>

    @if (session('status'))
        <div  class="alert">
              {{ session('status') }}
        </div>
    @endif

    <div id="card">
            <form method="post" action="/create" >
                @csrf
                <label class='labelan' for='nama_barang'>Nama Barang</label><br>
                <input class='inputan' id='nama_barang' name='nama_barang' type="text" value="" required autofocus><br>

                <label class='labelan' for='jenis_barang'>Jenis Barang</label><br>
                <input class='inputan' id='jenis_barang' name='jenis_barang' type="text" value="" required autofocus><br>

                <label class='labelan' for='jumlah_barang'>Jumlah Barang</label><br>
                <input class='inputan' id='jumlah_barang' name='jumlah_barang' type="number" value="" required autofocus><br>

                <label class='labelan' for='tanggal_masuk'>Tanggal Masuk</label><br>
                <input class='inputan' id='tanggal_masuk' name='tanggal_masuk' type="date" value="" required autofocus><br>
                
                <label class='labelan' for='tanggal_kadaluarsa'>Tanggal Kadaluarsa</label><br>
                <input class='inputan' id='tanggal_kadaluarsa' name='tanggal_kadaluarsa' type="date" value="" required autofocus><br>
             
                <label class='labelan' for='keterangan'>Keterangan</label><br>
                <input class='inputan' id='keterangan' name='keterangan' type="text" value="" required autofocus><br>
                
                <button class="btn" type="submit" name="submit" value="Simpan" >Simpan</button>

            </form>
    </div>
@endsection