<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
require_once "../../../koneksi.php";

>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
session_start();

if (!($_SESSION['role'] == "admin")) {
  header('Location: ../../../views/auth/pages/login.php');
  exit;
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

$page = "mata_kuliah";

// Query untuk mengambil nama-nama dosen dari tabel dosen
$query = "SELECT nama FROM dosen";
$result = mysqli_query($koneksi, $query);

// Inisialisasi array untuk menyimpan nama-nama dosen
$dosen = array();

// Memasukkan nama-nama dosen ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
  $dosen[] = $row['nama'];
}
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Mata Kuliah | Sistem Informasi Akademik</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-body-tertiary">
  <div class="d-flex">
    <!-- Sidebar -->
<<<<<<< HEAD
    <?php
    require "../partials/sidebar.php";
    ?>
=======
<<<<<<< HEAD
    <?php
    require "../partials/sidebar.php";
    ?>
=======
<<<<<<< HEAD
    <?php
    require "../partials/sidebar.php";
    ?>
=======
    <?php require "../partials/sidebar.php"; ?>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

    <!-- Main content -->
    <div class="container my-4 mx-3">
      <div class="dmb-3">
        <h2 class="fw-bold">Tambah Mata Kuliah</h2>
        <p>Silakan tambah mata kuliah dengan mengisi formulir di bawah ini</p>
        <hr>
      </div>

      <!-- Form untuk memasukkan data mata kuliah -->
      <form action="../../../process/tambah_mk.php" method="POST">
        <div class="d-flex">
          <div class="mb-3 me-3" style="width: 80%;">
            <label for="mk" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" id="mk" name="mk" required>
          </div>
          <div class="mb-3 me-3" style="width: 10%;">
            <label for="semester" class="form-label">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" required>
          </div>
          <div class="mb-3" style="width: 10%;">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" required>
          </div>
        </div>
        <div class="mb-3">
<<<<<<< HEAD
          <label for="dosen" class="form-label">Dosen</label>
          <input type="text" class="form-control" id="dosen" name="dosen" required>
=======
<<<<<<< HEAD
          <label for="dosen" class="form-label">Dosen</label>
          <input type="text" class="form-control" id="dosen" name="dosen" required>
=======
<<<<<<< HEAD
          <label for="dosen" class="form-label">Dosen</label>
          <input type="text" class="form-control" id="dosen" name="dosen" required>
=======
          <label for="id_dosen" class="form-label">Dosen</label>
          <select class="form-select" id="id_dosen" name="id_dosen" required>
            <option value="" disabled selected>Pilih Dosen</option>
            <?php
            // Query untuk mengambil daftar dosen dari tabel dosen
            $query = "SELECT nidn, nama FROM dosen";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['nidn'] . "'>" . $row['nama'] . "</option>";
            }
            ?>
          </select>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>