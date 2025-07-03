<?php
include 'koneksi.php';

$id_patient = $_POST['id_patient'];
$id_doctor = $_POST['id_doctor'];
$date = $_POST['appointment_date'];
$notes = $_POST['notes'];

$sql = "INSERT INTO appointments (id_patient, id_doctor, appointment_date, notes)
        VALUES ($id_patient, $id_doctor, '$date', '$notes')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data berhasil disimpan. <a href='../index.php'>Lihat Janji Temu</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
