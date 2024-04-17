<?php
require_once "../koneksi.php";

// Periksa apakah ada parameter id yang dikirimkan melalui metode POST
if (isset($_POST['id']) && !empty($_POST['id'])) {
  $id = $_POST['id'];

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  // Query SQL untuk hapus data mata kuliah
  $delete_query = "DELETE FROM mata_kuliah WHERE id = $id";

  // Eksekusi query
  $delete_result = mysqli_query($koneksi, $delete_query);

  if ($delete_result) {
    // Jika hapus berhasil, arahkan kembali ke daftar mata kuliah
    header("Location: ../views/admin/pages/daftar_mk.php");
    exit();
  } else {
    // Jika terjadi kesalahan dalam menghapus, tampilkan pesan kesalahan
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
  $delete_detail_query = "DELETE FROM detail_krs WHERE mata_kuliah_id = $id";
  $delete_detail_result = mysqli_query($koneksi, $delete_detail_query);

  if ($delete_detail_result) {
    $delete_query = "DELETE FROM mata_kuliah WHERE id = $id";
    $delete_result = mysqli_query($koneksi, $delete_query);

    if ($delete_result) {
      // Jika hapus berhasil, arahkan kembali ke daftar mata kuliah
      header("Location: ../views/admin/pages/daftar_mk.php");
      exit();
    } else {
      // Jika terjadi kesalahan dalam menghapus, tampilkan pesan kesalahan
      echo "Error: " . mysqli_error($koneksi);
      exit();
    }
  } else {
    // Jika terjadi kesalahan dalam menghapus detail, tampilkan pesan kesalahan
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
    echo "Error: " . mysqli_error($koneksi);
    exit();
  }
} else {
  // Jika parameter id tidak ada atau kosong, arahkan pengguna kembali ke daftar mata kuliah
  header("Location: ../views/admin/pages/daftar_mk.php");
  exit();
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
}
=======
}
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
