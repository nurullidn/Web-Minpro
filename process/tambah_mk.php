<?php
require_once "../koneksi.php";

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  // Mengambil nilai-nilai yang dikirimkan melalui form
  $nama_mata_kuliah = $_POST['mk'];
  $semester = $_POST['semester'];
  $sks = $_POST['sks'];
  $dosen = $_POST['dosen'];

  // Menyimpan data ke dalam tabel mata_kuliah
  $query = "INSERT INTO mata_kuliah (nama_mata_kuliah, semester, sks, dosen) VALUES ('$nama_mata_kuliah', '$semester', '$sks', '$dosen')";

  // Melakukan query ke database
  if (mysqli_query($koneksi, $query)) {
    header("Location: ../views/admin/pages/daftar_mk.php");
  } else {
    header("Location: ../views/admin/pages/daftar _mk.php");
  }

  // Menutup koneksi database
  mysqli_close($koneksi);
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    // Mengambil nilai-nilai yang dikirimkan melalui form
    $nama_mata_kuliah = $_POST['mk'];
    $semester = $_POST['semester'];
    $sks = $_POST['sks'];
    $id_dosen = $_POST['id_dosen']; 

    // Menyimpan data ke dalam tabel mata_kuliah
    $query = "INSERT INTO mata_kuliah (nama_mata_kuliah, semester, sks, id_dosen) VALUES ('$nama_mata_kuliah', '$semester', '$sks', '$id_dosen')";

    // Melakukan query ke database
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        header("Location: ../views/admin/pages/daftar_mk.php");
        exit();
    } else {
        header("Location: ../views/admin/pages/tambah_mk.php?error=1");
        exit();
    }
}

mysqli_close($koneksi);
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
