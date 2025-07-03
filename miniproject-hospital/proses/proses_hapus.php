<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM appointments WHERE id_appointment = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
} else {
    echo "Gagal mengapus data: " . mysqli_error($conn);
}
?>