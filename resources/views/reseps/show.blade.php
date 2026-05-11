@extends('layouts.app')

@section('content')

<div class="card shadow-lg border-0 rounded-4 overflow-hidden">

<img src="{{ asset('images/'.$resep->image) }}"
     style="height:400px; object-fit:cover;">

<div class="p-4">

<h1 class="fw-bold mb-3">
    {{ $resep->title }}
</h1>

<h4>Deskripsi</h4>
<p>{{ $resep->description }}</p>

<h4>Bahan-Bahan</h4>
<p>{{ $resep->ingredients }}</p>

<h4>Langkah-Langkah</h4>
<p>{{ $resep->steps }}</p>

</div>

</div>

@endsection