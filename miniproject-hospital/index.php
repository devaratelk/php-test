<?php
include '../miniproject-hospital/proses/koneksi.php';

$sql = "SELECT a.id_appointment, p.name AS patient_name, d.name AS doctor_name, d.specialization, a.appointment_date, a.notes
        FROM appointments a
        JOIN patients p ON a.id_patient = p.id_patient
        JOIN doctors d ON a.id_doctor = d.id_doctor";

$result = mysqli_query($conn, $sql);


?>

<h2>Daftar Janji Temu</h2>
<a href="tambah.php">+ Tambah Janji Temu</a><br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Pasien</th>
        <th>Dokter</th>
        <th>Spesialisasi</th>
        <th>Tanggal</th>
        <th>Catatan</th>
        <th>Aksi</th>
    </tr>




    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id_appointment'] ?></td>
            <td><?= $row['patient_name'] ?></td>
            <td><?= $row['doctor_name'] ?></td>
            <td><?= $row['specialization'] ?></td>
            <td><?= $row['appointment_date'] ?></td>
            <td><?= $row['notes'] ?> </td>
            <td>
                <a href="edit.php?id=<?= $row['id_appointment'] ?>">Edit</a>
                <a href="../miniproject-hospital/proses/proses_hapus.php?id=<?= $row['id_appointment'] ?>">Hapus</a>
            </td>

        </tr>
    <?php } ?>
</table>