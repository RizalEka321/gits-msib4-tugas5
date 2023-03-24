@extends('layouts.app')
@section('content')
    <section>
        <div class="mt-5">
            <div class="container border py-4">
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-circle-plus"></i> &nbsp; Tambah Produk
                </button>
                <div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $p)
                                <tr>
                                    <td class="text-center" width='10px'>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->category->name }}</td>
                                    <td>{{ $p->price }}</td>
                                    <td>
                                        <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-warning btn-sm"><i
                                                class="nav-icon fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('produk.hapus', $p->id) }}" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="ms-5">
                        {{-- {{ $mahasiswa->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('produk.tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="name">Nama :</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                                <div class="text-danger">
                                    @error('name')
                                        Nama Kategori tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="price">Harga :</label>
                                <input type="text" name="price" value="{{ old('price') }}"
                                    class="form-control @error('price') is-invalid @enderror" placeholder="Harga">
                                <div class="text-danger">
                                    @error('price')
                                        Harga tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="category_id">Kategori :</label>
                            <select name="category_id" value="{{ old('category_id') }}"
                                class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">Pilih Kategori Produk</option>
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}">- {{ $c->name }}</option>
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
                                <label for="description">Deskripsi :</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi"
                                    id="message-text"></textarea>
                                <div class="text-danger">
                                    @error('description')
                                        Deskripsi tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                    class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
