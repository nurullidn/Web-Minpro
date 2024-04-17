<?php
require_once "../../../koneksi.php";

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
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Mata Kuliah | Sistem Informasi Akademik</title>

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
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <h2 class="fw-bold">Daftar Mata Kuliah</h2>
          <p>Berikut mata kuliah yang dapat mahasiswa ambil</p>
        </div>

        <!-- Tambah KRS -->
        <a href="tambah_mk.php" class="text-decoration-none text-black">
          <i class="fa-solid fa-circle-plus fa-2xl me-1"></i>
          <span class="fw-semibold">Tambah</span>
        </a>
      </div>

      <div class="card border-0 shadow rounded-3">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Dosen</th>
                <th scope="col">Semester</th>
                <th scope="col">SKS</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
<<<<<<< HEAD
              // Mengambil data mata kuliah dari database
              $query = "SELECT * FROM mata_kuliah";
=======
<<<<<<< HEAD
              // Mengambil data mata kuliah dari database
              $query = "SELECT * FROM mata_kuliah";
=======
<<<<<<< HEAD
              // Mengambil data mata kuliah dari database
              $query = "SELECT * FROM mata_kuliah";
=======
              // Mengambil data mata kuliah dari database beserta nama dosen yang mengajarnya
              $query = "SELECT mk.*, d.nama AS nama_dosen 
                        FROM mata_kuliah mk 
                        INNER JOIN dosen d ON mk.id_dosen = d.nidn";
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
              $result = mysqli_query($koneksi, $query);
              $no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
                <tr>
                  <th scope="row"><?php echo $no++; ?></th>
                  <td><?php echo $row['nama_mata_kuliah']; ?></td>
                  <td><?php echo $row['dosen']; ?></td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            
                <tr>
                  <th scope="row"><?php echo $no++; ?></th>
                  <td><?php echo $row['nama_mata_kuliah']; ?></td>
                  <td><?php echo $row['nama_dosen']; ?></td>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
                  <td><?php echo $row['semester']; ?></td>
                  <td><?php echo $row['sks']; ?></td>
                  <td class="text-center">
                    <a href="edit_mk.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <button type="button" class="btn btn-danger m-0" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?php echo $row['id']; ?>"><i class="fa-solid fa-trash-can"></i></button>

                    <div class="modal fade" id="konfirmasiHapus<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapus<?php echo $row['id']; ?>" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="konfirmasiHapus<?php echo $row['id']; ?>">Konfirmasi Hapus</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-start">
                            Apakah Anda yakin ingin menghapus mata kuliah <span class="fw-bold"><?php echo $row['nama_mata_kuliah']; ?></span>?
                          </div>
                          <div class="modal-footer">
                            <!-- Tombol batal -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                            <!-- Tombol hapus -->
                            <form action="../../../process/hapus_mk.php" method="POST" style="display: inline-block;">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                              <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>