<!DOCTYPE html>
<html>
<head>
  <title>Tambah Categories</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
 
  <div class="container">   
    <h3>Tambah Produk Categories</h3> 
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2" for="id">ID Produk:</label>
        <div class="col-sm-1">
          <input type="text" class="form-control" name="id" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Nama Categories:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="name" required="">
        </div>
      </div>    
      <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
    </form>   
  </div>
</body>
</html>
<?php
include 'koneksidb.php';
if (isset($_POST['simpan'])) {
  mysqli_query($db,"INSERT INTO categories VALUES ('$_POST[id]','$_POST[name]')");
  echo "<script>alert('Data berhasil ditambah');window.location='produk.php'</script>";
}
