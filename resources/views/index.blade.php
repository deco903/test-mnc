<p><a href="{{route('create')}}">Input data</a></p>
<p>Cari Data Pegawai :</p>
	<form action="{{route('pegawai.cari')}}" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
<table border='1'>
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">nama</th>
      <th scope="col">kategori</th>
      <th scope="col">deskripsi</th>
      <th scope="col">gambar</th>
      <th scope="col">warna</th>
      <th scope="col">ukuran</th>
      <th scope="col">harga</th>
      <th scope="col">action</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($data_produk as $result => $hasil)
     <tr>
        <td>{{ $result + $data_produk->firstitem() }}</td>
        <td>{{$hasil->nama}}</td>
        <td>{{$hasil->kategori}}</td>
        <td>{{$hasil->deskripsi}}</td>
        <td>{{$hasil->gambar}}</td>
        <td>{{$hasil->warna}}</td>
        <td>{{$hasil->ukuran}}</td>
        <td>{{$hasil->harga}}</td>
        <td>
            <a href="/edit/{{$hasil->id}}" class="btn btn-sm btn-success">Edit</a>
            <a href="/delete/{{$hasil->id}}" class="btn btn-sm btn-danger">Hapus</a>
        </td>
     </tr>
     @endforeach
  </tbody>
  {{ $data_produk->links() }}
</table>

