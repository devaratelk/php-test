<?php
include '../miniproject-hospital/proses/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM appointments WHERE id_appointment = $id");
$row = mysqli_fetch_assoc($data);
$patients = mysqli_query($conn, "SELECT * FROM patients");
$doctors = mysqli_query($conn, "SELECT * FROM doctors");
?>

<h2>Edit Janji Temu</h2>
<form action="../miniproject-hospital/proses/proses_edit.php" method="POST">

    <input type="hidden" name="id_appointment" value="<?= $row['id_appointment'] ?>">
    <label for="id_patient">Patient</label>
    <br>

    <select name="id_patient" id="">

        <?php while ($p = mysqli_fetch_assoc($patients)) { ?>
            <option value="<?= $p['id_patient'] ?>" <?= $p['id_patient'] == $row['id_patient'] ? 'selected' : '' ?>>
                <?= $p['name'] ?>
            </option>

        <?php } ?>


    </select>

    <br>
    <br>

    <label for="id_doctor">Doctor</label>
    <br>

    <select name="id_doctor" id="">
        <?php while ($d = mysqli_fetch_assoc($doctors)) { ?>
            <option value="<?= $d['id_doctor'] ?>" <?= $d['id_doctor'] == $row['id_doctor'] ? 'selected' : '' ?>>
                <?= $d['name'] ?>
            </option>

        <?php } ?>

    </select>

    <br>
    <br>
    <label for="date">Date</label>
    <br>

    <input type="date" name="appointment_date" value="<?= $row['appointment_date'] ?>">
    <br>
    <br>
    <label for="text">Notes</label>
    <br>
    <input type="text" name="notes" value="<?= $row['notes'] ?>" placeholder="Catatan">

    <br>
    <br>
    <button type="submit">Simpan</button>


</form>