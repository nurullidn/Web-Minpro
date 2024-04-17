<?php
  $server = "localhost";
  $username = "root";
  $password = "";
<<<<<<< HEAD
  $database = "sia";
=======
<<<<<<< HEAD
  $database = "sia";
=======
<<<<<<< HEAD
  $database = "sia";
=======
  $database = "siakadk";
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)
  $koneksi = mysqli_connect($server, $username, $password, $database);

  if(!$koneksi) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
  }
?>