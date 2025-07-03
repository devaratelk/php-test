<?php
include 'koneksi.php';


$patients = mysqli_query($conn, "SELECT * FROM patients");

?>


<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Tgl Lahir</th>
    </tr>
    <?php while ($patient = mysqli_fetch_assoc($patients)) { ?>
        <tr>
            <td><?= $patient["id_patient"] ?> </td>
            <td> <?= $patient["name"] ?> </td>
            <td><?= $patient["gender"] ?></td>
            <td><?= $patient["birthdate"] ?></td>
        </tr>
    <?php } ?>
</table>