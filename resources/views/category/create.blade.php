@extends('layouts.app')

@section('content')
    <form action="{{ url('/create/store') }}" method="POST">
        @csrf
        <div class="mt-5">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Product</label>
                <input type="text" class="form-control" id="name" placeholder="Nama" name="name"
                    class="@error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi"
                    name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga Product</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga" name="price">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected>Pilih kategori</option>
                    @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
