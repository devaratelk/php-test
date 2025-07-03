<?php
include 'koneksi.php';


$doctors = mysqli_query($conn, "SELECT * FROM doctors");

?>


<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Spesialis</th>

    </tr>
    <?php while ($doctor = mysqli_fetch_assoc($doctors)) { ?>
        <tr>
            <td><?= $doctor["id_doctor"] ?> </td>
            <td><?= $doctor["name"] ?> </td>
            <td><?= $doctor["specialization"] ?> </td>



        </tr>
    <?php } ?>
</table>