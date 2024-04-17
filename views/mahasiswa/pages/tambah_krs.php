<?php
require_once "../../../koneksi.php";

session_start();

if (!($_SESSION['role'] == "mahasiswa")) {
  header('Location: ../views/auth/pages/login.php');
  exit;
}
<<<<<<< HEAD
?>

=======
<<<<<<< HEAD
?>

=======
<<<<<<< HEAD
?>

=======

$page = "krs";

// Pastikan ada data semester di session
if (!isset($_SESSION['semester'])) {
  // Jika tidak ada, redirect ke halaman yang sesuai
  header('Location: halaman_yang_sesuai.php'); // Ganti halaman_yang_sesuai.php dengan halaman yang sesuai
  exit;
}

$currentSemester = $_SESSION['semester']; // Ambil semester saat ini dari session
?>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah KRS | Sistem Informasi Akademik</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-body-tertiary">
  <div class="d-flex">
    <!-- Sidebar -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
    <?php
    require "../partials/sidebar.php";
    ?>

    <!-- Main content -->
    <div class="container my-4 mx-3">
      <div class="dmb-3">
        <h2 class="fw-bold">Tambah KRS</h2>
        <p>Silakan tambah KRS dengan memilih mata kuliah di bawah ini</p>
        <hr>

        <!-- Form untuk memilih mata kuliah -->
        <form id="formKRS" method="post" action="../../../process/tambah_krs.php">
          <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Pilih Mata Kuliah</label>
            <select class="form-select" id="mata_kuliah" name="mata_kuliah">
              <?php
              // Mengambil data mata kuliah dari database
              $query = "SELECT * FROM mata_kuliah";
              $result = mysqli_query($koneksi, $query);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['nama_mata_kuliah'] . "</option>";
              }
              ?>
            </select>
          </div>
          <button type="button" class="btn btn-primary" id="tambahMataKuliah">Tambah Mata Kuliah</button>

          <!-- Hidden input untuk menyimpan data KRS yang dipilih -->
          <input type="hidden" name="selected_courses" id="selectedCourses" value="">
        </form>

        <!-- Tabel untuk menampilkan mata kuliah yang dipilih -->
        <table class="table mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Dosen</th>
              <th scope="col">Semester</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody id="tabelKRS">
            <!-- Daftar mata kuliah yang dipilih akan ditambahkan di sini -->
          </tbody>
        </table>

        <!-- Tombol Submit -->
        <button type="button" class="btn btn-primary" id="submitKRS">Simpan KRS</button>
      </div>
    </div>
  </div>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    <?php require "../partials/sidebar.php"; ?>

    <!-- Main content -->
    <div class="container my-4 mx-3">
      <!-- Content -->

      <!-- Form untuk memilih mata kuliah -->
      <form id="formKRS" method="post" action="../../../process/tambah_krs.php">
        <!-- Mata kuliah yang sesuai dengan semester saat ini -->
        <div class="mb-3">
          <label for="mata_kuliah" class="form-label">Pilih Mata Kuliah</label>
          <select class="form-select" id="mata_kuliah" name="mata_kuliah">
            <?php
            // Mengambil data mata kuliah sesuai semester saat ini dari database
            $query = "SELECT mk.id, mk.nama_mata_kuliah, mk.semester, d.nama AS nama_dosen 
                      FROM mata_kuliah mk
                      INNER JOIN dosen d ON mk.id_dosen = d.nidn
                      WHERE mk.semester = $currentSemester";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['id'] . "'>" . $row['nama_mata_kuliah'] . " - " . $row['nama_dosen'] . "</option>";
            }
            ?>
          </select>
        </div>

        <!-- Tombol submit -->
        <button type="button" class="btn btn-primary" id="tambahMataKuliah">Tambah Mata Kuliah</button>

        <!-- Hidden input untuk menyimpan data KRS yang dipilih -->
        <input type="hidden" name="selected_courses" id="selectedCourses" value="">
      </form>

      <!-- Tabel untuk menampilkan mata kuliah yang dipilih -->
      <table class="table mt-4">
        <!-- Table header -->
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Dosen</th>
            <th scope="col">Semester</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <!-- Table body -->
        <tbody id="tabelKRS">
          <!-- Table rows -->
        </tbody>
      </table>

      <!-- Tombol Submit -->
      <button type="button" class="btn btn-primary" id="submitKRS">Simpan KRS</button>
    </div>
  </div>

  <!-- JavaScript -->
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Daftar mata kuliah yang dipilih
      const selectedCourses = [];

      // Ambil elemen formulir dan tabel
      const formKRS = document.getElementById('formKRS');
      const tabelKRS = document.getElementById('tabelKRS');

      // Tambahkan event listener untuk tombol "Tambah Mata Kuliah"
      document.getElementById('tambahMataKuliah').addEventListener('click', function() {
        const mataKuliahSelect = document.getElementById('mata_kuliah');
        const selectedCourseId = mataKuliahSelect.value;
        const selectedCourseName = mataKuliahSelect.options[mataKuliahSelect.selectedIndex].text;

        // Cek apakah mata kuliah sudah dipilih sebelumnya
        if (selectedCourses.includes(selectedCourseId)) {
          alert('Mata kuliah ini sudah dipilih.');
          return;
        }

        // Tambahkan mata kuliah ke daftar yang dipilih
        selectedCourses.push(selectedCourseId);

        // Buat baris baru di tabel
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
          <td>${selectedCourses.length}</td>
<<<<<<< HEAD
          <td>${selectedCourseName}</td>
          <td>Dummy Dosen</td>
=======
<<<<<<< HEAD
          <td>${selectedCourseName}</td>
          <td>Dummy Dosen</td>
=======
<<<<<<< HEAD
          <td>${selectedCourseName}</td>
          <td>Dummy Dosen</td>
=======
          <td>${selectedCourseName.split(' - ')[0]}</td>
          <td>${selectedCourseName.split(' - ')[1]}</td>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
          <td>1</td>
          <td><button type="button" class="btn btn-danger btn-sm hapus-mk" data-id="${selectedCourseId}">Hapus</button></td>
        `;

        // Tambahkan baris ke tabel
        tabelKRS.appendChild(newRow);

        // Update nilai input hidden dengan daftar mata kuliah yang dipilih
        document.getElementById('selectedCourses').value = JSON.stringify(selectedCourses);
      });

      // Event listener untuk menghapus mata kuliah dari tabel
      tabelKRS.addEventListener('click', function(e) {
        if (e.target.classList.contains('hapus-mk')) {
          const courseId = e.target.dataset.id;

          // Hapus mata kuliah dari daftar yang dipilih
          const index = selectedCourses.indexOf(courseId);
          if (index !== -1) {
            selectedCourses.splice(index, 1);
          }

          // Hapus baris dari tabel
          e.target.closest('tr').remove();

          // Update nilai input hidden dengan daftar mata kuliah yang dipilih
          document.getElementById('selectedCourses').value = JSON.stringify(selectedCourses);
        }
      });

      // Event listener untuk tombol "Simpan KRS"
      document.getElementById('submitKRS').addEventListener('click', function() {
        formKRS.submit(); // Kirim formulir
      });
    });
  </script>
</body>

</html>