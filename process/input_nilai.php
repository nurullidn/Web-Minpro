<?php
require_once "../koneksi.php";

session_start();

// Pastikan metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Pastikan nilai mata kuliah dipilih
  if (isset($_POST['mata_kuliah']) && !empty($_POST['mata_kuliah'])) {
    $mata_kuliah_id = $_POST['mata_kuliah'];

    // Looping untuk memproses setiap mahasiswa
    if (isset($_POST['nilai'])) {
      foreach ($_POST['nilai'] as $nim => $nilai) {
        // Pastikan nilai mahasiswa dipilih
        if (!empty($nilai)) {
          // Periksa apakah nilai sudah pernah dimasukkan sebelumnya
          $queryCheck = "SELECT * FROM nilai_mahasiswa WHERE nim = '$nim' AND mata_kuliah_id = $mata_kuliah_id";
          $resultCheck = mysqli_query($koneksi, $queryCheck);

          if (mysqli_num_rows($resultCheck) > 0) {
            // Jika nilai sudah pernah dimasukkan sebelumnya, lakukan UPDATE
            $query = "UPDATE nilai_mahasiswa SET nilai = $nilai WHERE nim = '$nim' AND mata_kuliah_id = $mata_kuliah_id";
          } else {
            // Jika nilai belum pernah dimasukkan sebelumnya, lakukan INSERT
            $query = "INSERT INTO nilai_mahasiswa (nim, mata_kuliah_id, nilai) VALUES ('$nim', $mata_kuliah_id, $nilai)";
          }

          // Eksekusi query
          if (mysqli_query($koneksi, $query)) {
            header("Location: ../views/dosen/pages/nilai_mahasiswa.php");
          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
          }
        } else {
          echo "Nilai mahasiswa untuk NIM: $nim tidak valid.";
        }
      }
    } else {
      echo "Tidak ada data nilai yang dikirim.";
    }
  } else {
    echo "Mata kuliah belum dipilih.";
  }
} else {
  echo "Metode yang digunakan tidak valid.";
}
