@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="fw-bold">Resep Makanan</h1>
        <p class="text-muted">Temukan resep favoritmu 🍕</p>
    </div>
</div>

<form action="/" method="GET" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control rounded-start-pill" placeholder="Cari resep...">
        <button class="btn btn-primary rounded-end-pill">Cari</button>
    </div>
</form>

<div class="row">

@foreach($resep as $recipe)

<div class="col-md-4 mb-4">
    <div class="card shadow-sm h-100">

        <img src="{{ asset('images/'.$recipe->image) }}"
             class="card-img-top"
             style="height:250px; object-fit:cover;">

        <div class="card-body">
            <h4 class="fw-bold">{{ $recipe->title }}</h4>

            <p class="text-muted">
                {{ Str::limit($recipe->description, 80) }}
            </p>

            <div class="d-flex gap-2">
                <a href="{{ route('reseps.show', $recipe->id) }}"
                   class="btn btn-primary btn-sm">
                    Detail
                </a>

                <a href="{{ route('reseps.edit', $recipe->id) }}"
                   class="btn btn-warning btn-sm text-white">
                    Edit
                </a>

                <form action="{{ route('reseps.destroy', $recipe->id) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

</div>

@endsection