<?php
// Mulai sesi
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

>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
// Sambungkan ke database
require_once "../../../koneksi.php";

// Periksa apakah ada parameter id yang dikirimkan melalui URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];

  // Ambil data mata kuliah berdasarkan id
  $query = "SELECT * FROM mata_kuliah WHERE id = $id";
  $result = mysqli_query($koneksi, $query);

  // Periksa apakah query berhasil dieksekusi
  if ($result) {
    $data = mysqli_fetch_assoc($result);
    if (!$data) {
      // Jika data tidak ditemukan, arahkan pengguna kembali ke daftar mata kuliah
      header("Location: daftar_mk.php");
      exit();
    }
  } else {
    // Jika terjadi kesalahan dalam eksekusi query, tampilkan pesan kesalahan
    echo "Error: " . mysqli_error($koneksi);
    exit();
  }
} else {
  // Jika parameter id tidak ada, arahkan pengguna kembali ke daftar mata kuliah
  header("Location: daftar_mk.php");
  exit();
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Mata Kuliah | Sistem Informasi Akademik</title>

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
        <h2 class="fw-bold">Edit Mata Kuliah</h2>
        <hr>
      </div>

      <!-- Form untuk memperbarui data mata kuliah -->
      <form action="../../../process/edit_mk.php" method="POST">
        <div class="d-flex">
          <div class="mb-3 me-3" style="width: 80%;">
            <label for="mk" class="form-label">Mata Kuliah</label>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
            <input type="text" class="form-control" id="mk" name="mk" value="<?php echo $data['nama_mata_kuliah']; ?>" required>
          </div>
          <div class="mb-3 me-3" style="width: 10%;">
            <label for="semester" class="form-label">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" value="<?php echo $data['semester']; ?>" required>
          </div>
          <div class="mb-3" style="width: 10%;">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" value="<?php echo $data['sks']; ?>" required>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            <input type="text" class="form-control" id="mk" name="mk" value="<?php echo isset($data['nama_mata_kuliah']) ? $data['nama_mata_kuliah'] : ''; ?>" required>
          </div>
          <div class="mb-3 me-3" style="width: 10%;">
            <label for="semester" class="form-label">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" value="<?php echo isset($data['semester']) ? $data['semester'] : ''; ?>" required>
          </div>
          <div class="mb-3" style="width: 10%;">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" value="<?php echo isset($data['sks']) ? $data['sks'] : ''; ?>" required>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
          </div>
        </div>
        <div class="mb-3">
          <label for="dosen" class="form-label">Dosen</label>
<<<<<<< HEAD
          <input type="text" class="form-control" id="dosen" name="dosen" value="<?php echo $data['dosen']; ?>" required>
=======
<<<<<<< HEAD
          <input type="text" class="form-control" id="dosen" name="dosen" value="<?php echo $data['dosen']; ?>" required>
=======
<<<<<<< HEAD
          <input type="text" class="form-control" id="dosen" name="dosen" value="<?php echo $data['dosen']; ?>" required>
=======
          <select class="form-select" id="dosen" name="id_dosen" required>
            <?php
            // Query SQL untuk mengambil data dosen
            $query_dosen = "SELECT * FROM dosen";
            $result_dosen = mysqli_query($koneksi, $query_dosen);

            // Periksa apakah query berhasil dieksekusi
            if ($result_dosen) {
              // Tampilkan opsi dropdown untuk setiap dosen
              while ($row_dosen = mysqli_fetch_assoc($result_dosen)) {
                $selected = ($row_dosen['nidn'] == $data['id_dosen']) ? 'selected' : '';
                echo "<option value='" . $row_dosen['nidn'] . "' $selected>" . $row_dosen['nama'] . "</option>";
              }
            } else {
              // Jika terjadi kesalahan dalam eksekusi query, tampilkan pesan kesalahan
              echo "<option value=''>Data tidak tersedia</option>";
            }
            ?>
          </select>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>