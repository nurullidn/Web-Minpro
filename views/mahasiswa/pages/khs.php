<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<?php
require_once "../../../koneksi.php";

session_start();

$page = "khs";

// Fungsi untuk mengonversi nilai ke bobot
function getBobot($nilai)
{
  if ($nilai >= 80) {
    return 4;
  } elseif ($nilai >= 75 && $nilai <= 79) {
    return 3.5;
  } elseif ($nilai >= 70 && $nilai <= 74) {
    return 3;
  } elseif ($nilai >= 65 && $nilai <= 69) {
    return 2.5;
  } elseif ($nilai >= 60 && $nilai <= 64) {
    return 2;
  } elseif ($nilai >= 50 && $nilai <= 59) {
    return 1.5;
  } elseif ($nilai >= 40 && $nilai <= 49) {
    return 1;
  } else {
    return 0;
  }
}

// Fungsi untuk mengonversi nilai ke huruf
function convertToGrade($nilai)
{
  if ($nilai >= 80) {
    return 'A';
  } elseif ($nilai >= 70 && $nilai <= 79) {
    return 'B';
  } elseif ($nilai >= 60 && $nilai <= 69) {
    return 'C';
  } elseif ($nilai >= 40 && $nilai <= 59) {
    return 'D';
  } else {
    return 'E';
  }
}

// Query untuk mengambil data nilai mahasiswa
$nim = mysqli_real_escape_string($koneksi, $_SESSION['nim']);
$query = "SELECT m.nama AS nama_mahasiswa, mk.nama_mata_kuliah, mk.semester, nk.nilai, mk.sks
          FROM mahasiswa m
          JOIN nilai_mahasiswa nk ON m.nim = nk.nim
          JOIN mata_kuliah mk ON nk.mata_kuliah_id = mk.id
          WHERE m.nim = '$nim'
          ORDER BY mk.semester ASC";

$result = mysqli_query($koneksi, $query);

// Inisialisasi variabel untuk IPK dan jumlah SKS tiap semester
$ipk = [];
$sks = [];

// Iterasi hasil query untuk mengelompokkan mata kuliah berdasarkan semester
while ($row = mysqli_fetch_assoc($result)) {
  $semester = $row['semester'];
  $nilai = $row['nilai'];
  $bobot = getBobot($nilai);
  $sks[$semester][] = $row['sks'];
  $ipk[$semester][] = $bobot;
}

?>

>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
  <title>Beranda | Sistem Informasi Akademik</title>
=======
<<<<<<< HEAD
  <title>Beranda | Sistem Informasi Akademik</title>
=======
<<<<<<< HEAD
  <title>Beranda | Sistem Informasi Akademik</title>
=======
  <title>Kartu Hasil Studi | Sistem Informasi Akademik</title>
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
    <?php
    require "../partials/sidebar.php";
    ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

    <div class="container mx-3 my-4">
      <h2 class="fw-bold mb-4">Kartu Hasil Studi</h2>

      <!-- Card banyak laporan -->
      <div class="d-flex justify-content-between mb-4">
        <!-- Card jumlah laporan -->
        <div class="border-4 border-start border-primary card shadow rounded-3 border-0" style="width: 18rem;">
          <div class=" card-body d-flex justify-content-between">
          <div>
            <h5 class="card-title">IPK</h5>
            <p class="card-text fw-semibold fs-2">3.96</p>
          </div>

          <!-- <div class="my-auto">
              <i class="fa-solid fa-list fa-2xl text-secondary"></i>
            </div> -->
        </div>
      </div>

      <!-- Card laporan selesai -->
      <div class="border-4 border-start border-success card shadow rounded-3 border-0" style="width: 18rem;">
        <div class="card-body d-flex justify-content-between">
          <div>
            <h5 class="card-title">Jumlah SKS</h5>
            <p class="card-text fw-semibold fs-2">24</p>
          </div>

          <!-- <div class="my-auto">
              <i class="fa-regular fa-circle-check fa-2xl text-secondary"></i>
            </div> -->
        </div>
      </div>

      <!-- Card laporan selesai -->
      <div class="border-4 border-start border-success card shadow rounded-3 border-0" style="width: 18rem;">
        <div class="card-body d-flex justify-content-between">
          <div>
            <h5 class="card-title">Jumlah Mata Kuliah</h5>
            <p class="card-text fw-semibold fs-2">9</p>
          </div>

          <!-- <div class="my-auto">
              <i class="fa-regular fa-circle-check fa-2xl text-secondary"></i>
            </div> -->
        </div>
      </div>
    </div>

    <div class="card border-0 shadow rounded-6">
      <div class="card-header bg-white">
        <h5 class="fw-semibold m-0">Daftar Kartu Hasil Studi</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="d-flex align-items-center justify-content-between mx-4 my-2">
            <div>
              <!-- Semester -->
              <h6 class="m-0 fw-bold mb-1">Semester 1</h6>
              <div class="d-flex">
                <!-- SKS -->
                <span class="badge text-bg-success me-2">24 SKS</span>
                <!-- IP -->
                <span class="badge text-bg-success">IP 3.69</span>
              </div>
            </div>

            <div>
              <button type="button" class="btn btn-success btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#khsModal"><i class="fa-solid fa-eye me-1"></i> Lihat KHS</button>

              <div class="modal fade" id="khsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">KHS Semester 1</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">SKS</th>
                            <th scope="col">Nilai Huruf</th>
                            <th scope="col">Nilai Angka</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Perancangan dan Pemrograman Web</td>
                            <td>Nagato S.Kom., M.Kom</td>
                            <td>3</td>
                            <td>A</td>
                            <td>91</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    <div class="container mx-3 my-4">
      <h2 class="fw-bold mb-4">Kartu Hasil Studi</h2>

      <?php
      // Iterasi hasil query untuk menampilkan KHS untuk setiap semester
      foreach ($sks as $semester => $sks_semester) {
        // Mengecek apakah kunci semester ada dalam array $sks
        if (array_key_exists($semester, $sks)) {
          // Menghitung total SKS dan IPK
          $total_sks = array_sum($sks_semester);
          $total_ipk = array_sum($ipk[$semester]);
      ?>

          <div class="card border-0 shadow rounded-6 mb-4">
            <div class="card-header bg-white">
              <h5 class="fw-semibold m-0">Semester <?php echo $semester; ?></h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="d-flex align-items-center justify-content-between mx-4 my-2">
                  <div>
                    <h6 class="m-0 fw-bold mb-1">Mata Kuliah</h6>
                    <div class="d-flex">
                      <span class="badge text-bg-success me-2"><?php echo $total_sks; ?> SKS</span>
                      <span class="badge text-bg-success">IP <?php echo number_format($total_ipk / count($sks_semester), 2); ?></span>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#khsModal<?php echo $semester; ?>"><i class="fa-solid fa-eye me-1"></i> Lihat KHS</button>

                  <div class="modal fade" id="khsModal<?php echo $semester; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">KHS Semester <?php echo $semester; ?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Nilai</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $counter = 1;
                              foreach ($result as $row) {
                                if ($row['semester'] == $semester) {
                                  echo "<tr>";
                                  echo "<td>" . $counter . "</td>";
                                  echo "<td>" . $row['nama_mata_kuliah'] . "</td>";
                                  echo "<td>" . getBobot($row['nilai']) . "</td>";
                                  echo "<td>" . $row['nilai'] . " (" . convertToGrade($row['nilai']) . ")</td>";
                                  echo "</tr>";
                                  $counter++;
                                }
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>

      <?php
        } else {
          // Jika kunci semester tidak ditemukan, tampilkan pesan bahwa tidak ada data yang tersedia untuk semester tersebut
          echo "<p>Tidak ada data yang tersedia untuk Semester $semester.</p>";
        }
      }
      ?>
    </div>
  </div>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>