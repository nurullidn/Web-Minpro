<?php
require_once "../koneksi.php";

// Pastikan NIDN telah disediakan
if (isset($_POST['nidn'])) {
  $nidn = $_POST['nidn'];

    // Query untuk menghapus dosen berdasarkan NIDN
    $query = "DELETE FROM dosen WHERE nidn = ?";
    
    // Persiapkan dan eksekusi statement
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $nidn);
    mysqli_stmt_execute($stmt);

    // Periksa apakah penghapusan berhasil
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Jika berhasil, kembalikan ke halaman daftar dosen
        header('Location: ../views/admin/pages/daftar_dosen.php');
        exit;
    } else {
        // Jika gagal, kembalikan ke halaman sebelumnya dengan pesan kesalahan
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?error=1');
        exit;
    }
} else {
    // Jika NIDN tidak disediakan, kembalikan ke halaman sebelumnya dengan pesan kesalahan
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?error=2');
    exit;
}
?>
