<?php
$conn = mysqli_connect("localhost", "root", "", "db_hospital");


// code dibawah ini berfungsi untuk memastikan jika koneksi bernilai false
// maka akan menampilkan pesan error pada layar
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
