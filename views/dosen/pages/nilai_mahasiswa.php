<?php
require_once "../../../koneksi.php";

session_start();

if (!isset($_SESSION['nidn'])) {
  header('Location: ../../../views/auth/pages/login.php');
  exit;
}

$page = "nilai_mahasiswa";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Input Nilai Mahasiswa | Sistem Informasi Akademik</title>

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

    <div class="container my-4 mx-3">
      <div>
        <h2 class="fw-bold">Input Nilai Mahasiswa</h2>
        <p>Masukkan nilai mahasiswa untuk mata kuliah yang Anda ampu.</p>
      </div>

      <div class="card border-0 shadow rounded-3">
        <div class="card-body">
          <form action="../../../process/input_nilai.php" method="POST">
            <div class="mb-3">
              <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
              <select class="form-select" id="mata_kuliah" name="mata_kuliah" required>
                <option value="">Pilih Mata Kuliah</option>
                <?php
                // Ambil daftar mata kuliah yang diajarkan oleh dosen yang login
                $query = "SELECT mk.id, mk.nama_mata_kuliah FROM mata_kuliah mk WHERE mk.id_dosen = '" . $_SESSION['nidn'] . "'";
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='" . $row['id'] . "'>" . $row['nama_mata_kuliah'] . "</option>";
                }
                ?>
              </select>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                  </tr>
                </thead>
                <tbody id="data_mahasiswa">
                  <!-- Tabek muncul di siniiiiiiiiiiiiiiii -->
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script>
    // Fungsi untuk mengambil data mahasiswa berdasarkan mata kuliah yang dipilih
    function getMahasiswa() {
      var mata_kuliah_id = document.getElementById("mata_kuliah").value;
      if (mata_kuliah_id != "") {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../../../process/get_mahasiswa.php?mata_kuliah_id=" + mata_kuliah_id, true);
        xhr.onload = function() {
          if (this.status == 200) {
            document.getElementById("data_mahasiswa").innerHTML = this.responseText;
          }
        };
        xhr.send();
      } else {
        document.getElementById("data_mahasiswa").innerHTML = "";
      }
    }

    // Panggil fungsi getMahasiswa saat halaman pertama kali dimuat
    document.addEventListener("DOMContentLoaded", function() {
      getMahasiswa();
    });

    // Panggil fungsi getMahasiswa saat memilih mata kuliah
    document.getElementById("mata_kuliah").addEventListener("change", function() {
      getMahasiswa();
    });
  </script>
</body>

</html>