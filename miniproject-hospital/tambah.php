<?php
include '../miniproject-hospital/proses/koneksi.php';

$patients = mysqli_query($conn, "SELECT * FROM patients");
$doctors = mysqli_query($conn, "SELECT * FROM doctors");
?>

<h2>Form Tambah Janji Temu</h2>
<form action="../miniproject-hospital/proses/proses_tambah.php" method="POST">
    <label>Pasien:</label><br>
    <select name="id_patient">
        <?php while ($p = mysqli_fetch_assoc($patients)) { ?>
            <option value="<?= $p['id_patient'] ?>"><?= $p['name'] ?></option>
        <?php } ?>
    </select><br><br>

    <label>Dokter:</label><br>
    <select name="id_doctor">
        <?php while ($d = mysqli_fetch_assoc($doctors)) { ?>
            <option value="<?= $d['id_doctor'] ?>"><?= $d['name'] ?> (<?= $d['specialization'] ?>)</option>
        <?php } ?>
    </select><br><br>

    <label>Tanggal Janji:</label><br>
    <input type="date" name="appointment_date"><br><br>

    <label>Catatan:</label><br>
    <textarea name="notes"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>