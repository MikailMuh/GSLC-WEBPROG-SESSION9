{{-- resources/views/layout/navbar.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    {{-- Nama toko, klik -> ke halaman utama --}}
    <a class="navbar-brand" href="{{ url('/') }}">E-Commerce</a>

    {{-- Tombol hamburger (muncul di layar kecil). Jangan ubah class & data-bs-... nya --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          {{-- href="#" dari contoh Bootstrap diganti url() ke route form kategori --}}
          <a class="nav-link" href="{{ url('/kategori/create') }}">Tambah Kategori</a>
        </li>
      </ul>
    </div>
  </div>
</nav>