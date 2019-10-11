<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
    $namaDepan = $_POST['nama_depan'];
    $namaBelakang = $_POST['nama_belakang'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $hobi = $_POST['hobi'];
    ?>
    <table class="table">
        <tr>
            <th>Nama Depan</th>
            <td><?= $namaDepan ?></td>
        </tr>
        <tr>
            <th>Nama Belakang</th>
            <td><?= $namaBelakang ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?= $umur ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <th>Kewarganegaraan</th>
            <td><?= $kewarganegaraan ?></td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td><?= $hobi ?></td>
        </tr>
    </table>
</body>
</html>