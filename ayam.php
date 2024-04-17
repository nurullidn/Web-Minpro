<?php
// Password yang ingin dienkripsi
<<<<<<< HEAD
$password = "password123";
=======
<<<<<<< HEAD
$password = "password123";
=======
<<<<<<< HEAD
$password = "password123";
=======
$password = "password456";
>>>>>>> c58049d (minpro 3)
>>>>>>> 1d4dc1c (minpro 3)
>>>>>>> 0ffef5b (Mini Project 3)

// Enkripsi password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Output hasil enkripsi
echo "Password terenkripsi: " . $hashedPassword . "<br>";
