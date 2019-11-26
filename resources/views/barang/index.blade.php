@extends('element.index')
@section('contentnya')

<div class="container">
		<br>
	<br>
	<br>
	<button style="display: {{Auth()->user()->role == 'kasir' ? "block" : "none"}}" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Karyawan
</button>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($produk as $p)
    <tr>
    	<td>{{$p->id}}</td>
    	<td>{{$p->nama_barang}}</td>
    	<td>{{$p->stok}}</td>
      <td>{{$p->harga}}</td>
    	<td><a href="" class="btn btn-primary btn-sm">Edit</a></td>
    </tr>
  	@endforeach
  </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambah-barang" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barangp</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Nama Barang" name="nama_barang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Stok</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Stok Barang" name="stok">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga Barnag" name="harga">
  </div>
  
  <button type="submit" class="btn btn-primary float-right">Buat</button>
</form>
      </div>
      
    </div>
  </div>
</div>




@endsection