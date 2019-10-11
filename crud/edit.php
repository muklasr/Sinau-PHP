<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit Kategori</h1>
      <form action="update.php">
        <?php
          include 'koneksi.php';
          $id_kategori = $_GET['id_kategori'];
          $sql = mysqli_query($connection,"SELECT * FROM kategori WHERE id_kategori = $id_kategori");
          while($data = mysqli_fetch_assoc($sql)){
        ?>
        Nama Kategori <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
        <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']?>">
        <input type="submit" name="submit" value="simpan" class="btn btn-primary">
        <?php    
          }
        ?>
      </form>
    </div>
  </body>
</html>