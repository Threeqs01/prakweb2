@extends('admin.layout.app')
@section('content')
<form method="POST" action="{{ url('admin/produk/store') }}">
<h4 style="text-align: center">Form Tambah Pesanan</h4>  
    {{ csrf_field() }}
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-4 col-form-label">No HP</label> 
    <div class="col-8">
      <input id="no_hp" name="no_hp" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
    <div class="col-8">
      <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false" data-ms-editor="true"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <select id="produk_id" name="produk_id" class="custom-select">
        @foreach ($produk as $prod)
            <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
        @endforeach
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection
