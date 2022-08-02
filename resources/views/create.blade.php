
  
  <form  method="post" action="{{route('store')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="insert nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kategori</label>
    <input type="text" name="kategori" class="form-control" id="exampleInputPassword1" placeholder="insert kategori">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="insert deskripsi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gambar</label>
    <input type="file" name="gambar">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Warna</label>
    <select name="warna">
    <option value="merah">merah</option>
    <option value="biru">biru</option>
    <option value="hitam">hitam</option>
    <option value="abu-abu">abu-abu</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ukuran</label>
    <select name="ukuran">
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
    <option value="50.000">baju kerja spin S 50.000</option>
    <option value="60.000">baju kerja spin M 60.000</option>
    <option value="65.000">baju kerja spin L 65.000</option>
    </select>
  </div>
  <div class="form-group">
   <button class="btn btn-primary" >Submit</button>
  </div>
</form>


  

