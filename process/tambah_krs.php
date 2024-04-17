<?php
// Pastikan file koneksi.php sudah di-require
require_once "../koneksi.php";

<<<<<<< HEAD
// Memulai sesi
=======
<<<<<<< HEAD
// Memulai sesi
=======
<<<<<<< HEAD
// Memulai sesi
=======
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
session_start();

// Mengecek apakah pengguna sudah login
if (!isset($_SESSION['nim'])) {
  // Jika belum, redirect ke halaman login
  header("Location: ../../auth/pages/login.php");
  exit; // Menghentikan proses selanjutnya
}

// Mengecek apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil data dari form
  $selectedCourses = json_decode($_POST['selected_courses']);

  // Mengambil NIM mahasiswa dari sesi
  $nim = $_SESSION['nim'];

<<<<<<< HEAD
  // Membuat KRS baru
  $queryInsertKRS = "INSERT INTO krs (nim, semester) VALUES ('$nim', 1)";
=======
<<<<<<< HEAD
  // Membuat KRS baru
  $queryInsertKRS = "INSERT INTO krs (nim, semester) VALUES ('$nim', 1)";
=======
<<<<<<< HEAD
  // Membuat KRS baru
  $queryInsertKRS = "INSERT INTO krs (nim, semester) VALUES ('$nim', 1)";
=======
  // Mengecek apakah ada semester saat ini di session
  if (!isset($_SESSION['semester'])) {
    // Jika tidak, redirect ke halaman yang sesuai
    header('Location: halaman_yang_sesuai.php'); // Ganti halaman_yang_sesuai.php dengan halaman yang sesuai
    exit;
  }

  // Mengambil semester saat ini dari session
  $semester = $_SESSION['semester'];

  // Membuat KRS baru untuk semester saat ini
  $queryInsertKRS = "INSERT INTO krs (nim, semester) VALUES ('$nim', $semester)";
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  mysqli_query($koneksi, $queryInsertKRS);
  $krsId = mysqli_insert_id($koneksi);

  // Memasukkan detail KRS (mata kuliah yang dipilih) ke dalam database
  foreach ($selectedCourses as $courseId) {
    $queryInsertDetailKRS = "INSERT INTO detail_krs (krs_id, mata_kuliah_id) VALUES ($krsId, $courseId)";
    mysqli_query($koneksi, $queryInsertDetailKRS);
  }

  // Redirect ke halaman yang sesuai setelah berhasil menambahkan KRS
  header("Location: ../views/mahasiswa/pages/krs.php");
  exit;
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
?>
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
