<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 40vh; height: 100vh;">
  <div class="d-flex justify-content-center">
    <a href="/" class="d-flex align-items-center text-white text-decoration-none">
      <!-- Logo -->
      <div class="my-3 d-flex justify-content-center align-items-center">
        <i class="fa-solid fa-school fa-2xl me-3"></i>
        <p class="m-0 fw-bold">Sistem Informasi <br> Akademik</p>
      </div>
    </a>
  </div>

  <hr>

  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="daftar_mk.php" class="nav-link <?php echo ($page == "nilai_mahasiswa") ? 'active' : 'text-white' ?>" aria-current="page">
        <i class="fa-solid fa-file-pen me-1"></i>
        Nilai Mahasiswa
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-solid fa-user mx-2 fa-lg"></i>
      <strong>Akun</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="min-width: max-content;">
      <li class="px-3 py-2 fw-semibold">
<<<<<<< HEAD
        Muhammad Farrel Sirah
        <br>
        <small class="text-white-50"><?= $_SESSION['nama'] ?></small>
=======
<<<<<<< HEAD
        Muhammad Farrel Sirah
        <br>
        <small class="text-white-50"><?= $_SESSION['nama'] ?></small>
=======
<<<<<<< HEAD
        Muhammad Farrel Sirah
        <br>
        <small class="text-white-50"><?= $_SESSION['nama'] ?></small>
=======
      <?= $_SESSION['nama'] ?>
        <br>
        <small class="text-white-50">Dosen</small>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="../../../process/logout.php">Sign out</a></li>
    </ul>
  </div>
</div>