<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <form class="form-inline">
    <input type="number" name="n1" class="form-control inline" placeholder="Angka pertama">
    <select name="operasi" class="form-control">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value=":">:</option>
    </select>
    <input type="number" name="n2" class="form-control inline" placeholder="Angka kedua">
    <br><br>
    <!-- <input type="submit" name="operasi" value="+" class="btn btn-primary">
    <input type="submit" name="operasi" value="-" class="btn btn-primary">
    <input type="submit" name="operasi" value="x" class="btn btn-primary">
    <input type="submit" name="operasi" value=":" class="btn btn-primary"> -->
    <input type="submit" name="submit" value="Hitung" class="btn btn-primary">
    </form>

    <?php
        if(isset($_GET['submit'])){
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            echo "Hasilnya : ";
            switch($_GET['operasi']){
                case "+":
                    echo $n1 + $n2;
                break;
                case "-":
                    echo $n1 - $n2;
                break;
                case "x":
                    echo $n1 * $n2;
                break;
                case ":":
                    echo $n1 / $n2;
                break;
            }
        }
    ?>
</body>
</html>