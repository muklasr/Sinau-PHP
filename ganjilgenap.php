<!-- 
program : Cek ganjil/genap
author  : Muklas Rahmanto (18/425973/SV/15115) 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Ganjil Genap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="fluid-container" style="margin-top:150px">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <form>
                <div class="input-group">
                    <input type="number" name="n1" class="form-control" placeholder="Bilangan" required>
                    <div class="input-group-append">
                        <input type="submit" name="submit" value="Cek" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center">
    <?php
        if (isset($_GET['submit'])) {
            $n1 = $_GET['n1'];
            echo $n1." adalah bilangan ";
            echo ($n1%2==0) ? "genap" : "ganjil";
        }
    ?>
    </div>
</div>
</body>
</html>