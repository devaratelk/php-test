<?php
include 'koneksi.php';

$id = $_POST['id_appointment'];
$id_patient = $_POST['id_patient'];
$id_doctor = $_POST['id_doctor'];
$date = $_POST['appointment_date'];
$notes = $_POST['notes'];

$sql = "UPDATE appointments SET
            id_patient = $id_patient,
            id_doctor = $id_doctor,
            appointment_date = '$date',
            notes = '$notes'
        WHERE id_appointment = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
} else {
    echo "Gagal mengupdate data: " . mysqli_error($conn);
}
