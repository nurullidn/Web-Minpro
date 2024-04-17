<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
<div class="bg-secondary sticky-top text-white px-4" style="height: 100vh;">
  <div style="width: 30vh;">

    <!-- Logo -->
    <div class="mt-4 d-flex justify-content-center align-items-center">
      <i class="fa-solid fa-school fa-2xl me-3"></i>
      <p class="m-0 fw-bold">Sistem Informasi <br> Akademik</p>
    </div>

    <div class="border-bottom my-4 border-2"></div>

    <div>
      <ul class="list-unstyled">
        <li class="mb-2"><a href="beranda.php" class="text-decoration-none text-white fw-semibold">Beranda</a></li>
        <li class="mb-2"><a href="krs.php" class="text-decoration-none text-white fw-semibold">Kartu Rencana Studi</a></li>
        <li class="mb-2"><a href="khs.php" class="text-decoration-none text-white fw-semibold">Kartu Hasil Studi</a></li>
      </ul>
    </div>
  </div>

  <!-- Tombol Logout -->
  <div class="">
    <a href="../../../process/logout.php" class="btn btn-danger">Logout</a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
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
      <a href="beranda.php" class="nav-link <?php echo ($page == "beranda") ? 'active' : 'text-white' ?>" aria-current="page">
        <i class="fa-solid fa-house me-1"></i>
        Beranda
      </a>
    </li>
    <li>
      <a href="krs.php" class="nav-link <?php echo ($page == "krs") ? 'active' : 'text-white' ?>">
        <i class="fa-solid fa-book me-1"></i>
        Kartu Rencana Studi
      </a>
    </li>
    <li>
      <a href="khs.php" class="nav-link <?php echo ($page == "khs") ? 'active' : 'text-white' ?>">
        <i class="fa-solid fa-square-poll-vertical me-1"></i>
        Kartu Hasil Studi
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
        <?= $_SESSION['nama'] ?>
        <br>
        <small class="text-white-50">Mahasiswa</small>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="../../../process/logout.php">Sign out</a></li>
    </ul>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  </div>
</div>