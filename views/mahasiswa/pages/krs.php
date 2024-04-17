<?php
require "../../../koneksi.php";
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

session_start();

if (!($_SESSION['role'] == "mahasiswa")) {
  header('Location: ../views/auth/pages/login.php');
  exit;
}
?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
session_start();

// Cek apakah pengguna memiliki role "mahasiswa", jika tidak, arahkan ke halaman login
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "mahasiswa") {
  header('Location: ../views/auth/pages/login.php');
  exit;
}

$page = "krs"; // Variabel untuk halaman

// Koneksi ke CSS dan Font Awesome
?>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda | Sistem Informasi Akademik</title>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
  <!-- CSS -->
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-body-tertiary">
  <div class="d-flex">
    <!-- Navbar -->
    <?php require "../partials/sidebar.php"; ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    <!-- Konten Utama -->
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
    <div class="container mx-3 my-4">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="fw-bold">Kartu Rencana Studi</h2>

        <!-- Tambah KRS -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        <a href="tambah_krs.php" class="text-decoration-none text-black">
          <i class="fa-solid fa-circle-plus fa-2xl me-1"></i>
          <span class="fw-semibold">Tambah KRS</span>
        </a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        <?php
        // Dapatkan semester saat ini dari data mahasiswa yang sedang login
        $currentSemester = $_SESSION['semester'];

        // Hitung jumlah KRS yang sudah ada untuk mahasiswa tersebut
        $nim = $_SESSION['nim'];
        $queryCountKRS = "SELECT COUNT(DISTINCT semester) AS jumlah_semester FROM krs WHERE nim = '$nim'";
        $resultCountKRS = mysqli_query($koneksi, $queryCountKRS);
        $jumlahSemester = mysqli_fetch_assoc($resultCountKRS)['jumlah_semester'];

        // Jika jumlah semester yang sudah ada kurang dari semester saat ini, tampilkan tombol "Tambah KRS"
        if ($jumlahSemester < $currentSemester) {
          echo '<a href="tambah_krs.php" class="text-decoration-none text-black">
          <i class="fa-solid fa-circle-plus fa-2xl me-1"></i>
          <span class="fw-semibold">Tambah KRS</span>
        </a>';
        }
        ?>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
      </div>

      <!-- Daftar Kartu Rencana Studi -->
      <div class="card border-0 shadow rounded-6">
        <div class="card-header bg-white">
<<<<<<< HEAD
          <h5 class="fw-semibold m-0">Daftar Kartu Rencana Studi</h5>
=======
<<<<<<< HEAD
          <h5 class="fw-semibold m-0">Daftar Kartu Rencana Studi</h5>
=======
<<<<<<< HEAD
          <h5 class="fw-semibold m-0">Daftar Kartu Rencana Studi</h5>
=======
          <h5 class="fw-semibold mb-0 ms-2">Daftar Kartu Rencana Studi</h5>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        </div>
        <ul class="list-group list-group-flush">
          <?php
          // Ambil data KRS dari database
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
          $query = "SELECT * FROM krs";
          $result = mysqli_query($koneksi, $query);
          
          // Inisialisasi semester
          $semester = 1;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
          $query = "SELECT * FROM krs WHERE nim='$nim'";
          $result = mysqli_query($koneksi, $query);
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

          // Loop untuk menampilkan setiap KRS
          while ($row = mysqli_fetch_assoc($result)) {
            $krsId = $row['id'];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
            // Mengambil jumlah SKS dari detail KRS
            $queryDetail = "SELECT SUM(mk.sks) AS total_sks FROM detail_krs dk
            JOIN mata_kuliah mk ON dk.mata_kuliah_id = mk.id
            WHERE dk.krs_id = $krsId";
            $resultDetail = mysqli_query($koneksi, $queryDetail);
            $totalSKS = mysqli_fetch_assoc($resultDetail)['total_sks'];
          ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            $semester = $row['semester']; // Ambil nilai semester dari tabel krs
            // Mengambil jumlah SKS dari detail KRS
            $queryDetail = "SELECT SUM(mk.sks) AS total_sks FROM detail_krs dk JOIN mata_kuliah mk ON dk.mata_kuliah_id = mk.id WHERE dk.krs_id = $krsId";
            $resultDetail = mysqli_query($koneksi, $queryDetail);
            $totalSKS = mysqli_fetch_assoc($resultDetail)['total_sks'];
          ?>
            <!-- Menampilkan informasi KRS -->
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
            <li class="list-group-item">
              <div class="d-flex align-items-center justify-content-between mx-4 my-2">
                <div>
                  <!-- Semester -->
                  <h6 class="m-0 fw-bold mb-1">Semester <?php echo $semester; ?></h6>
                  <!-- SKS -->
                  <span class="badge text-bg-success"><?php echo $totalSKS; ?> SKS</span>
                </div>
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
                <div>
                  <!-- Lihat KRS -->
                  <button type="button" class="btn btn-success btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#krsModal<?php echo $krsId; ?>"><i class="fa-solid fa-eye me-1"></i> Lihat KRS</button>

                  <!-- Modal untuk menampilkan detail KRS -->
                  <div class="modal fade" id="krsModal<?php echo $krsId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">KRS Semester <?php echo $semester; ?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Tabel untuk menampilkan detail KRS -->
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">SKS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // Ambil detail KRS dari database
                              $queryDetailKRS = "SELECT * FROM detail_krs WHERE krs_id = $krsId";
                              $resultDetailKRS = mysqli_query($koneksi, $queryDetailKRS);
                              $counter = 1;

                              // Loop untuk menampilkan setiap detail KRS
                              while ($detailKRS = mysqli_fetch_assoc($resultDetailKRS)) {
                                $mataKuliahId = $detailKRS['mata_kuliah_id'];
                                // Ambil informasi mata kuliah dari database
                                $queryMataKuliah = "SELECT * FROM mata_kuliah WHERE id = $mataKuliahId";
                                $resultMataKuliah = mysqli_query($koneksi, $queryMataKuliah);
                                $mataKuliah = mysqli_fetch_assoc($resultMataKuliah);
                              ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
                                <tr>
                                  <th scope="row"><?php echo $counter; ?></th>
                                  <td><?php echo $mataKuliah['nama_mata_kuliah']; ?></td>
                                  <td><?php echo $mataKuliah['dosen']; ?></td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
                                <!-- Menampilkan informasi detail KRS -->
                                <tr>
                                  <th scope="row"><?php echo $counter; ?></th>
                                  <td><?php echo $mataKuliah['nama_mata_kuliah']; ?></td>
                                  <td>
                                    <?php
                                    // Ambil informasi dosen dari tabel dosen berdasarkan id_dosen pada mata kuliah
                                    $idDosen = $mataKuliah['id_dosen'];
                                    $queryDosen = "SELECT nama FROM dosen WHERE nidn = '$idDosen'";
                                    $resultDosen = mysqli_query($koneksi, $queryDosen);
                                    $dosen = mysqli_fetch_assoc($resultDosen);
                                    echo $dosen['nama'];
                                    ?>
                                  </td>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
                                  <td><?php echo $mataKuliah['sks']; ?></td>
                                </tr>
                              <?php
                                $counter++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
          <?php
            // Increment semester
            $semester++;
          }
          ?>
        </ul>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
