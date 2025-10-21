<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container mt-4">
  <h1>Halaman Mahasiswa</h1>

  <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">TTL</th>
      </tr>
    </thead>
  <tbody>
  @for ($i = 0; $i < $jumlah; $i++)
  <tr>
    <td>{{ $npm[$i] }}</td>
    <td>{{ $nama[$i] }}</td>
    <td>Perempuan</td>
    <td>Kota Medan</td>
  </tr>
  @endfor
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>