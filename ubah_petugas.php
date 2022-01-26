<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
      background-color: #4682b4;
      margin-top: 70px;
      }
  </style>
</head>
<body>
<?php
    include "koneksi.php";
    $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
?>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Ubah Petugas</div>
    <div class="card-body">
    <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id_petugas" value= "<?=$dt_petugas['id_petugas']?>">
        <div class="form-group">
          <label>Nama Petugas</label>
          <input type="text" name="nama_petugas" value= "<?=$dt_petugas['nama_petugas']?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" value= "<?=$dt_petugas['username']?>" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>Level</label>
          <input type="text" name="level" value= "<?=$dt_petugas['level']?>" class="form-control">
        </div>
        <a href="tampil_petugas.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
        <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>