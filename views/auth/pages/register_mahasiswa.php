<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Mahasiswa | Sistem Informasi Akademik</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">
  <main class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
    <div class="card shadow rounded border-0 rounded-3" style="width: 22rem">
      <div class="card-body m-3">
        <h4 class="card-subtitle mb-4 fw-bold" id="card-subtitle">Registrasi Mahasiswa</h4>

        <form method="POST" action="../../../process/register_mahasiswa.php">
          <!-- Nama -->
          <div class="mb-3">
            <label for="nama" class="form-label fw-semibold text-body-secondary">Nama</label>
            <input type="text" class="form-control" name="nama" required>
          </div>

          <!-- NIM -->
          <div class="mb-3">
            <label for="nim" class="form-label fw-semibold text-body-secondary">NIM</label>
            <input type="text" class="form-control" name="nim" required>
          </div>

          <!-- Program Studi -->
          <div class="mb-3">
            <label for="prodi" class="form-label fw-semibold text-body-secondary">Program Studi</label>
            <input type="text" class="form-control" name="prodi" required>
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label fw-semibold text-body-secondary">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>

          <!-- Tombol register -->
          <button class="btn btn-primary w-100 py-2 mb-3" type="submit" name="register">Register</button>

          <p class="m-0">Sudah punya akun? Silakan <a href="login.php">login</a></p>
        </form>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
