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

<div class="fluid-container">
<div class="row align-items-center">
    <div class="col-md-4 offset-md-4">
    <form action="tabel.php" method="POST">
        <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan"/><br/>
        <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang"/><br/>
        <input type="number" name="umur" placeholder="Umur"/><br/><br/>
        <textarea type="text" class="form-control" name="alamat" placeholder="Alamat"></textarea><br/>
        <select name="gender">
            <option value="Laki-laki">Laki-laki
            <option value="Perempuan">Perempuan
        </select><br/>
        Kewarganegaraan <input type="radio" name="kewarganegaraan" value="WNI"> WNI
        <input type="radio" name="kewarganegaraan" value="WNA"> WNA<br/>
        Hobi <input type="radio" name="hobi" value="Membaca"> Membaca
        <input type="radio" name="hobi" value="Menulis"> Menulis<br/><br>
        <input type="submit" class="btn btn-primary" name="kirim" value="Simpan"/>
    </form>
    </div>
    </div>
</div>
</body>
</html>