<?php
require_once "../koneksi.php";

// Cek apakah form telah di-submit
if(isset($_POST["register"])) {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $prodi = $_POST["prodi"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Enkripsi password

    // Query untuk memasukkan data mahasiswa ke dalam database
    $query = "INSERT INTO mahasiswa (nama, nim, prodi, password) VALUES ('$nama', '$nim', '$prodi', '$password')";

    // Eksekusi query
    if(mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect ke halaman login.php
<<<<<<< HEAD
        header("Location: ../views/admin/pages/login.php");
=======
<<<<<<< HEAD
        header("Location: ../views/admin/pages/login.php");
=======
<<<<<<< HEAD
        header("Location: ../views/admin/pages/login.php");
=======
        header("Location: ../views/auth/pages/login.php");
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
        exit;
    } else {
        // Jika terjadi error, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
