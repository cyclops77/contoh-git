@extends('element.index')
@section('contentnya')

<div class="container">
		<br>
	<br>
	<br>
  <div class="row">
	<div class="col-md-6">
	<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">Harga Barang</th>
      
    </tr>
  </thead>
  <tbody>
  	@foreach($produk as $p)
    <tr>
      <td><input type="checkbox" value="{{$p->id}}"></td>
    	<td>{{$p->id}}</td>
    	<td>{{$p->nama_barang}}</td>
    	<td>{{$p->stok}}</td>
      <td>{{$p->harga}}</td>
    	
    </tr>
  	@endforeach
  </tbody>
</table>
</div>

</div>
</div>




@endsection