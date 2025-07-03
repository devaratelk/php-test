<?php
include 'koneksi.php';


$patients = mysqli_query($conn, "SELECT * FROM patients");
$doctors = mysqli_query($conn, "SELECT * FROM doctors");
$doctors2 = mysqli_query($conn, "SELECT * FROM doctors");

?>

<select>
    <?php while ($p = mysqli_fetch_assoc($patients)) { ?>


        <option value="<?= $p['id_patient'] ?>"><?= $p['name'] ?></option>
    <?php } ?>


</select>



<select>
    <?php while ($d = mysqli_fetch_assoc($doctors)) { ?>
        <option value="<?= $d['id_doctor'] ?>"><?= $d['name'] ?></option>

    <?php } ?>

</select>

<select>
    <?php while ($d = mysqli_fetch_assoc($doctors2)) { ?>

        <option value="<?= $d['id_doctor'] ?>"><?= $d['specialization'] ?></option>

    <?php } ?>

</select>