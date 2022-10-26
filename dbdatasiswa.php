<?php
require 'dbConfig.php';

$siswa = query('SELECT * FROM siswa');

?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset"UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=adge">
    <meta name"viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel data siswa</title>

</head>
<body>
    <table border="1">
        <thead>
            <th>No</th>
            <th>id_siswa</th>
            <th>id_user</th>
            <th>nama</th>
            <th>kelas</th>
            <th>jurusan</th>
        </thead>
        <?php $i = 1;?>
        <?php foreach ($siswa as $sw) :?>
        <tbody>
            <tr>
            <td><?= $i;?></td>
            <td><?php echo $sw ['id_siswa'];?></td>
            <td><?php echo $sw ['id_user'];?></td>
            <td><?php echo $sw ['nama'];?></td>
            <td><?php echo $sw ['kelas'];?></td>
            <td><?php echo $sw ['jurusan'];?></td>
        </tr>
        <?php $i++?>
        <?php endforeach;?>
        </tbody>
        </table>
        </body>
            </html>