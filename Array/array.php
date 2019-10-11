<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $a = array(1, 'dua', 3, 'empat', 'lima');
    $b = array('key' => 1, 5 => 'lima', 3=>3);
    $c = array('angka' => 1, 2, 'tiga', 'bilangan'=>'ganjil');
    // echo $a;
    // print_r($a);
    // echo "<br>";
    // var_dump($a);
?>

<table>
<tr>
    <th>index</th>
    <th>value</th>
</tr>
<?php for ($i=0;$i<count($a);$i++) { ?>
<tr>
    <td><?= $i ?></td>
    <td><?= $a[$i] ?></td>
</tr>
    <?php } ?>
</table>

<table border="1">
<?php
    foreach ($b as $key => $data) {
        echo "
        <tr>
            <td> $key </td>
            <td> $data </td>
        </tr> ";
    }
?>
</table>
</body>
</html>