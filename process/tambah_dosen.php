<?php
session_start();

if (!($_SESSION['role'] == "admin")) {
  header('Location: ../../../views/auth/pages/login.php');
  exit;
}

require_once("../koneksi.php");

// Tangkap data yang dikirimkan melalui form
$nama = $_POST['nama'];
$nidn = $_POST['nidn'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];

// Validasi password dan konfirmasi password
if ($password != $konfirmasi_password) {
  $_SESSION['error'] = "Konfirmasi password tidak sesuai.";
  header("Location: tambah_dosen.php");
  exit;
}

// Hash password sebelum disimpan ke database
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Query untuk menambahkan dosen baru
$query = "INSERT INTO dosen (nidn, nama, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "sss", $nidn, $nama, $password_hashed);

if (mysqli_stmt_execute($stmt)) {
  $_SESSION['success'] = "Dosen berhasil ditambahkan.";
  header("Location: ../views/admin/pages/daftar_dosen.php");
} else {
  $_SESSION['error'] = "Gagal menambahkan dosen.";
  header("Location: ../views/admin/pages/tambah_dosen.php");
}

mysqli_stmt_close($stmt);
mysqli_close($koneksi);
