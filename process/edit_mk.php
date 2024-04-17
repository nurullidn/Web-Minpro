<?php
require_once "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil nilai-nilai form
  $id = $_POST['id'];
  $mk = $_POST['mk'];
  $semester = $_POST['semester'];
  $sks = $_POST['sks'];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  $dosen = $_POST['dosen'];

  // Query SQL untuk update data mata kuliah
  $update_query = "UPDATE mata_kuliah SET nama_mata_kuliah = '$mk', semester = '$semester', sks = '$sks', dosen = '$dosen' WHERE id = $id";
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
  $id_dosen = $_POST['id_dosen'];
  
  // Query SQL untuk update data mata kuliah
  $update_query = "UPDATE mata_kuliah SET nama_mata_kuliah = '$mk', semester = '$semester', sks = '$sks', id_dosen = '$id_dosen' WHERE id = $id";
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

  // Eksekusi query
  $update_result = mysqli_query($koneksi, $update_query);

  if ($update_result) {
    // Jika update berhasil, arahkan kembali ke daftar mata kuliah
    header("Location: ../views/admin/pages/daftar_mk.php");
    exit();
  } else {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
    header("Location: ../views/admin/pages/daftar_mk.php");
    exit();
  }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
    exit();
  }
}
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
