<?php
require "../koneksi.php";

session_start();

// Mengecek apakah proses login.php berjalan karena ada POST log in
if (isset($_POST["login"])) {
  // Memeriksa role yang dipilih
  $role = $_POST["role"];

  if ($role == "mahasiswa") {
    $nim = $_POST["username"]; // Menggunakan "username" sebagai nim
    $pass = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");

    if (mysqli_num_rows($result) == 1) {
      $item = mysqli_fetch_assoc($result);

      if (password_verify($pass, $item['password'])) {
        $_SESSION['nama'] = $item['nama'];
        $_SESSION['nim'] = $item['nim'];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $_SESSION['semester'] = $item['semester'];
        $_SESSION['prodi'] = $item['prodi'];
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        $_SESSION['role'] = $role;
        header("Location: ../views/mahasiswa/pages/beranda.php");
        exit();
      } else {
        $_SESSION['error'] = 'login_failed';
      }
    } else {
      $_SESSION['error'] = 'login_failed';
    }
  } elseif ($role == "admin") {
    $username = $_POST["username"];
    $pass = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");

    if (mysqli_num_rows($result) == 1) {
      $item = mysqli_fetch_assoc($result);

      if (password_verify($pass, $item['password'])) {
        $_SESSION['nama'] = $item['nama'];
        $_SESSION['role'] = $role; // Menyimpan role yang dipilih
        header("Location: ../views/admin/pages/daftar_mk.php");
        exit();
      } else {
        $_SESSION['error'] = 'login_failed';
      }
    } else {
      $_SESSION['error'] = 'login_failed';
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
  } elseif ($role == "dosen") {
    $nidn = $_POST["username"]; 
    $pass = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn='$nidn'");

    if (mysqli_num_rows($result) == 1) {
      $item = mysqli_fetch_assoc($result);

      if (password_verify($pass, $item['password'])) {
        $_SESSION['nama'] = $item['nama'];
        $_SESSION['nidn'] = $item['nidn'];
        $_SESSION['role'] = $role; 
        header("Location: ../views/dosen/pages/nilai_mahasiswa.php");
        exit();
      } else {
        $_SESSION['error'] = 'login_failed';
      }
    } else {
      $_SESSION['error'] = 'login_failed';
    }
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  } else {
    $_SESSION['error'] = 'invalid_role';
  }

<<<<<<< HEAD
  header("Location: ../views/auth/pages/login.php"); // Kembali ke halaman login jika terjadi kesalahan
}
=======
<<<<<<< HEAD
  header("Location: ../views/auth/pages/login.php"); // Kembali ke halaman login jika terjadi kesalahan
}
=======
<<<<<<< HEAD
  header("Location: ../views/auth/pages/login.php"); // Kembali ke halaman login jika terjadi kesalahan
}
=======
  header("Location: ../views/auth/pages/login.php"); 
}
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
