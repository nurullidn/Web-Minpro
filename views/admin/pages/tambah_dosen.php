<?php
session_start();

if (!($_SESSION['role'] == "admin")) {
  header('Location: ../../../views/auth/pages/login.php');
  exit;
}

$page = "dosen";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Dosen | Sistem Informasi Akademik</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-body-tertiary">
  <div class="d-flex">
    <!-- Sidebar -->
    <?php require "../partials/sidebar.php"; ?>

    <!-- Main content -->
    <div class="container my-4 mx-3">
      <div class="dmb-3">
        <h2 class="fw-bold">Tambah Dosen</h2>
        <p>Silakan tambah dosen dengan mengisi formulir di bawah ini</p>
        <hr>
      </div>

      <!-- Form untuk memasukkan data dosen -->
      <form action="../../../process/tambah_dosen.php" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="nidn" class="form-label">NIDN</label>
          <input type="text" class="form-control" id="nidn" name="nidn" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
          <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
