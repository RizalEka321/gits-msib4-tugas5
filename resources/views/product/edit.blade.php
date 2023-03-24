@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div class="container border py-4">
            <form action="{{ Route('produk.update', $product->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk :</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        aria-describedby="emailHelp" name="name" value="{{ $product->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            Nama Produk tidak boleh kosong
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga :</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                        aria-describedby="emailHelp" name="price" value="{{ $product->price }}">
                    @error('price')
                        <div class="invalid-feedback">
                            Harga Produk tidak boleh kosong
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id">Kategori :</label>
                    <select name="category_id" value="{{ old('category_id') }}"
                        class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Pilih Kategori Produk</option>
                        @foreach ($category as $c)
                            <option value="{{ $c->id }}" {{ $product->category_id == $c->id ? 'selected' : '' }}>
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('category_id')
                            Pilih salah satu Kategori.
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" rows="5" class="form-control  @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                        <div class="text-danger">
                            @error('description')
                                Deskripsi tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="justify-content-between">
                    <a href="{{ route('produk') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i>
                        &nbsp; Kembali</a>
                    <button type="submit" class="btn btn-primary float-right"><i class="fa-solid fa-floppy-disk"></i>
                        &nbsp; Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
