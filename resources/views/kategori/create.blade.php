{{-- resources/views/kategori/create.blade.php --}}
@extends('layout.master')   {{-- pakai kerangka dari layout/master.blade.php --}}

@section('title', 'Tambah Kategori')   {{-- ngisi @yield('title') --}}

@section('content')   {{-- semua di bawah ini masuk ke @yield('content') --}}
<div class="container py-4" style="max-width: 600px;">
  <h1 class="mb-4">Tambah Kategori Produk</h1>

  {{-- Pesan sukses dari controller (->with('pesan', ...)) --}}
  @if (session('pesan'))
    <div class="alert alert-success">{{ session('pesan') }}</div>
  @endif

  <form action="/kategori" method="POST">
    @csrf   {{-- wajib di form POST, kalau lupa error 419 --}}

    <div class="mb-3">
      <label for="nama" class="form-label">Nama Kategori</label>
      {{-- old('nama') = isi ulang kalau validasi gagal. is-invalid = kotak merah --}}
      <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
             class="form-control @error('nama') is-invalid @enderror">
      @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea id="deskripsi" name="deskripsi" rows="3"
                class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
      @error('deskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@endsection