
  
  <form  method="post" action="{{route('update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$hasil->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{$hasil->nama}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kategori</label>
    <input type="text" name="kategori" class="form-control" value="{{$hasil->kategori}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control" value="{{$hasil->deskripsi}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gambar</label></br>
    <img src="{{url('upload/post/'. $hasil->gambar)}}" style="width:100px;" alt="">
    <input type="file" name="gambar">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Warna</label>
    <select name="warna">
    <option value="">{{$hasil->warna}}</option>
    <option value="merah">merah</option>
    <option value="merah">merah</option>
    <option value="biru">biru</option>
    <option value="hitam">hitam</option>
    <option value="abu-abu">abu-abu</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ukuran</label>
    <select name="ukuran">
    <option value="">{{$hasil->ukuran}}</option>
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="XXL">XXL</option>
    </select>
  </div>
  <div class="form-group">
     <label for="harga">Pilih Harga: Rp</label>
    <select name="harga">
    <option value="">{{$hasil->harga}}</option>
    <option value="50.000">baju kerja spin S 50.000</option>
    <option value="60.000">baju kerja spin M 60.000</option>
    <option value="65.000">baju kerja spin L 65.000</option>
    </select>
  </div>
  <div class="form-group">
   <button class="btn btn-primary" >update</button>
  </div>
</form>


  

