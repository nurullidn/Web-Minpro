<?php
require_once "../koneksi.php";

// Pastikan mata_kuliah_id telah dikirimkan melalui parameter GET
if(isset($_GET['mata_kuliah_id'])) {
    $mata_kuliah_id = $_GET['mata_kuliah_id'];

    // Query untuk mendapatkan daftar mahasiswa yang mengambil mata kuliah tertentu beserta nilai jika ada
    $query = "SELECT m.nim, m.nama, nm.nilai FROM mahasiswa m 
              LEFT JOIN nilai_mahasiswa nm ON m.nim = nm.nim AND nm.mata_kuliah_id = $mata_kuliah_id
              JOIN krs k ON m.nim = k.nim JOIN detail_krs dk ON k.id = dk.krs_id WHERE dk.mata_kuliah_id = $mata_kuliah_id";
    $result = mysqli_query($koneksi, $query);

    // Tampilkan data mahasiswa dalam format yang sesuai
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td><input type='number' name='nilai[" . $row['nim'] . "]' min='0' max='100' value='" . ($row['nilai'] ?? '') . "'></td>"; // Input nilai dengan nilai awal jika ada
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada mahasiswa yang mengambil mata kuliah ini.</td></tr>";
}
