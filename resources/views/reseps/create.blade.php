@extends('layouts.app')

@section('content')

<div class="card shadow-lg p-4 rounded-4">

<h2 class="fw-bold mb-4">Tambah Resep</h2>

<form action="{{ route('reseps.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="mb-3">
    <label>Nama Resep</label>
    <input type="text" name="title" class="form-control">
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control">
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
    <label>Bahan-Bahan</label>
    <textarea name="ingredients" class="form-control"></textarea>
</div>

<div class="mb-3">
    <label>Langkah-Langkah</label>
    <textarea name="steps" class="form-control"></textarea>
</div>

<button class="btn btn-primary px-4 rounded-pill">
    Simpan
</button>

</form>

</div>

@endsection