
@extends('template')
@section('title','View Stock')

@section('isi')
<div >
		<div id="box-dua" class="artikel" style="text-align : center; font-weight: bold;" >
        <h3>Stock Barang</h3>
    </div>

        <button type="button" class="button"><i class="fas fa-download"></i>   Save As PDF</button>
        <button type="button" class="button" style="margin-left: 20px;"><i class="fas fa-eye"></i>   See Report</button>

		<table class="table mt-3">
			<tr bgcolor= "9CC094">
        <th>No</th>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Jumlah</th>
				<th>Tanggal Masuk</th>
				<th>Tanggal Kadaluarsa</th>
                <th>Keterangan</th>
                <th>Action</th>
			</tr>
          @foreach($stocks as $stock)
      <tr>
        <td>{{$loop->iteration}}</td>
				<td>{{ $stock->nama_barang }}</td>
				<td>{{ $stock->jenis_barang }}</td>
				<td>{{ $stock->jumlah_barang }}</td>
				<td>{{ $stock->tanggal_masuk }}</td>
				<td>{{ $stock->tanggal_kadaluarsa }}</td>
        <td>{{ $stock->keterangan }}</td>
        <td>
          <form >
            <a href="/edit/{{ $stock->id }}" class="button-update">Edit</a>
          </form>
          
          <form action="/viewStock/{{ $stock->id }}" method="post">
            @method('delete')
            @csrf
            <button class="button-delete">Delete</button>
          </form>
				</td>
      </tr>
          @endforeach
            </table>
</div>


@endsection