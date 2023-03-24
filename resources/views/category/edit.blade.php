@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <div class="container border py-4">
            <form action="{{ Route('kategori.update', $category->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori :</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        aria-describedby="emailHelp" name="name" value="{{ $category->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            Nama tidak boleh kosong
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" rows="5" class="form-control  @error('description') is-invalid @enderror">{{ $category->description }}</textarea>
                        <div class="text-danger">
                            @error('description')
                                Deskripsi tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="justify-content-between">
                    <a href="{{ route('kategori') }}" class="btn btn-secondary"><i
                            class='nav-icon fas fa-arrow-left'></i>&nbsp; Kembali</a>
                    <button type="submit" class="btn btn-primary float-right"><i class="fa-solid fa-floppy-disk"></i>&nbsp;
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
