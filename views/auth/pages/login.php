<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In | Sistem Informasi Akademik</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">
  <main class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
    <div class="card shadow rounded border-0 rounded-3" style="width: 22rem">
      <div class="card-body m-3">
        <h4 class="card-subtitle mb-4 fw-bold" id="card-subtitle">Masuk ke SIA</h4>

        <form method="POST" action="../../../process/login.php">
          <!-- Username-->
          <div class="mb-3">
            <label for="username" class="form-label fw-semibold text-body-secondary">Username</label>
            <input type="text" class="form-control" name="username">
          </div>

          <!-- Password-->
          <div class="mb-3">
            <label for="password" class="form-label fw-semibold text-body-secondary">Password</label>
            <input type="password" class="form-control" name="password">
          </div>

          <!-- Role -->
          <div class="mb-4">
            <label for="role" class="form-label fw-semibold text-body-secondary">Login Sebagai</label>
            <select class="form-select" name="role">
              <option value="mahasiswa">Mahasiswa</option>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
              <option value="dosen">Dosen</option>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
              <option value="admin">Admin</option>
            </select>
          </div>

          <!-- Tombol log in-->
<<<<<<< HEAD
          <button class="btn btn-primary w-100 py-2" type="submit" name="login">Log in</button>
=======
<<<<<<< HEAD
          <button class="btn btn-primary w-100 py-2" type="submit" name="login">Log in</button>
=======
<<<<<<< HEAD
          <button class="btn btn-primary w-100 py-2" type="submit" name="login">Log in</button>
=======
          <button class="btn btn-primary w-100 py-2 mb-3" type="submit" name="login">Log in</button>

          <p class="m-0">Register mahasiswa <a href="register_mahasiswa.php">di sini</a></p>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        </form>
      </div>
    </div>
  </main>

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
