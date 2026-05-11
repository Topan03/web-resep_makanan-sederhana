@extends('layouts.app')

@section('content')

<div class="card shadow-lg p-4 rounded-4">

<h2 class="fw-bold mb-4">Edit Resep</h2>

<form action="{{ route('reseps.update', $resep->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">
    <label>Nama Resep</label>
    <input type="text"
           name="title"
           value="{{ $resep->title }}"
           class="form-control">
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control">
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="description" class="form-control">{{ $resep->description }}</textarea>
</div>

<div class="mb-3">
    <label>Bahan-Bahan</label>
    <textarea name="ingredients" class="form-control">{{ $resep->ingredients }}</textarea>
</div>

<div class="mb-3">
    <label>Langkah-Langkah</label>
    <textarea name="steps" class="form-control">{{ $resep->steps }}</textarea>
</div>

<button class="btn btn-primary rounded-pill px-4">
    Update
</button>

</form>

</div>

@endsection