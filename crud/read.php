<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Read</title>
  </head>
  <body>
    <div class="container">
      <h1>Kategori <a href="tambah.html" class="btn btn-primary">tambah</a></h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Kategori</th>
            <th scope="col" colspan="2">action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'koneksi.php';
            $sql = mysqli_query($connection,"SELECT * FROM kategori");
            while($row = mysqli_fetch_assoc($sql)){
              echo "
              <tr>
                <td>{$row['id_kategori']}</td>
                <td>{$row['nama']}</td>
                <td width='1'><a href='edit.php?id_kategori={$row['id_kategori']}' class='btn btn-success'>edit</a></td>
                <td width='1'><a href='delete.php?id_kategori={$row['id_kategori']}' class='btn btn-danger'>delete</a></td>
              </tr>
              ";
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>