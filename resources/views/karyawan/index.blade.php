
@extends('element.index')

@section('contentnya')

<div class="container">
	<br>
	<br>
	<br>
	<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Karyawan
</button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">NOHP</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($ky as $k)
    <tr>
      <th>{{$k->id}}</th>
      <td>{{$k->nama_lengkap}}</td>
      <td>{{$k->nohp}}</td>
      <td><a href="" class="btn btn-danger btn-sm">hapus</a></td>
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
        <form action="/tambah-karyawan" method="POST">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Nama Lengkap" name="nama_lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nomor HP</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP" name="nohp">
  </div>
  
  <button type="submit" class="btn btn-primary float-right">Buat</button>
</form>
      </div>
      
    </div>
  </div>
</div>

@endsection