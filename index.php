<?php

$data = [
    ["Sukoharjo", 110.80424268093775, -7.63026347599157, 46.82, 98044],
    ["Nguter", 110.87287397704885, -7.728378730657123, 57.85, 57285],
    ["Baki", 110.78029174735384, -7.604635200362342, 23.40, 70841],
    ["Grogol", 110.81235517122303, -7.601831465494685, 31.33, 121414],
    ["Tawangsari", 110.78637080215626, -7.724605427637224, 39.32, 57815]
];

?>

<style>
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 5px 10px;
    }
</style>

<table>
    <tr>
        <th>Kecamatan</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Luas</th>
        <th>Jumlah Penduduk</th>
    </tr>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td><?= $row[3] ?></td>
            <td><?= $row[4] ?></td>
        </tr>
    <?php endforeach; ?>

</table>