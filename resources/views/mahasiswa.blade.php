<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand fw-bold" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
        <input type="text" class="form-control w-25" placeholder="Search">
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    <h2 class="fw-bold">Ini adalah halaman Tambah Mahasiswa</h2>
    <h5 class="mb-4">Form Mahasiswa</h5>

    <form>
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">NPM</label>
                <input type="text" class="form-control" placeholder="Input NPM">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" placeholder="Input Nama Mahasiswa">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Prodi</label>
                <input type="text" class="form-control" value="Sistem Informasi">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 d-grid">
                <button class="btn btn-primary">Simpan</button>
            </div>
            <div class="col-md-6 d-grid">
                <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
