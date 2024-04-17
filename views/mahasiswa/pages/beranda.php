<?php
session_start();

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
if (!($_SESSION['role'] == "mahasiswa")) {
  header('Location: ../views/auth/pages/login.php');
  exit;
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
// Cek apakah pengguna memiliki role "mahasiswa", jika tidak, arahkan ke halaman login
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "mahasiswa") {
  header('Location: ../views/auth/pages/login.php');
  exit;
}

$page = "beranda";
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda | Sistem Informasi Akademik</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-body-tertiary">
  <div class="d-flex">
    <!-- Navbar -->
    <?php
    require "../partials/sidebar.php";
    ?>

    <div class="container mx-3 my-4">
      <h2 class="fw-bold mb-4">Beranda</h2>

      <!-- Selamat datang -->
      <div class="card border-0 shadow rounded-3">
        <div class="card-body">
          <h4 class="card-title mb-3">Selamat Datang</h4>
<<<<<<< HEAD
          <h6 class="card-subtitle mb-2 text-body-secondary">Nurul Indriani (2209116067)</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary mb-2">S-1 Sistem Informasi</h6>
          <p class="card-text">Pengisian Kartu Rencana Studi Dijadwalkan Tanggal 17 Juli s/d 31 Juli 2023</p>
=======
<<<<<<< HEAD
          <h6 class="card-subtitle mb-2 text-body-secondary">Nurul Indriani (2209116067)</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary mb-2">S-1 Sistem Informasi</h6>
          <p class="card-text">Pengisian Kartu Rencana Studi Dijadwalkan Tanggal 17 Juli s/d 31 Juli 2023</p>
=======
<<<<<<< HEAD
          <h6 class="card-subtitle mb-2 text-body-secondary">Nurul Indriani (2209116067)</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary mb-2">S-1 Sistem Informasi</h6>
          <p class="card-text">Pengisian Kartu Rencana Studi Dijadwalkan Tanggal 17 Juli s/d 31 Juli 2023</p>
=======
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_SESSION['nama']; ?> (<?php echo $_SESSION['nim']; ?>)</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary mb-2"><?php echo $_SESSION['prodi']; ?> (Semester <?php echo $_SESSION['semester']; ?>)</h6>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

<<<<<<< HEAD
</html>
=======
<<<<<<< HEAD
</html>
=======
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
