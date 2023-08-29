@extends('layouts.app')

@section('title')
Tambah Category | Catshop Admin
@endsection

@section('content')
<h3>Input Categories</h3>
<div class="form-login">
  <form action="{{ url('/category/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="categories">Categories</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Categories" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Price</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection