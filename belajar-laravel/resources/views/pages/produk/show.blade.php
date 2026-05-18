@extends('layouts.master')

@section('konten')
<h1>Daftar Produk Kami</h1>
<hr>
<a href="/product/tambah" class="btn btn-primary mb-3" type="button" class="btn btn-primary mb-3">Tekan Tahan</a>
<div class="alert alert-primary">
    <b>Nama Toko:</b> {{$nama_toko}}
    <br>
    <b>Alamat:</b> {{$alamat}}
    <br>
    <b>Type Toko:</b>{{$type}}
</div>
<div class="card">
    <div class="card-header bg-info">
        Daftar Produk
    </div>
  <div class="card-body">
    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>5</td>
      <td>80.000.000</td>
      <td>
          <button type="button" class="btn btn-success">Tambah</button>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Laptop ASUS</td>
      <td>3</td>
      <td>28.000.000</td>
      <td>
          <button type="button" class="btn btn-success">Tambah</button>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Laptop ACER</td>
      <td>8</td>
      <td>24.000.000</td>
      <td>
          <button type="button" class="btn btn-success">Tambah</button>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Laptop THOSIBA</td>
      <td>2</td></td>
      <td>8.000.000</td>
      <td>
          <button type="button" class="btn btn-success">Tambah</button>
          <button type="button" class="btn btn-warning">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
@endsection
