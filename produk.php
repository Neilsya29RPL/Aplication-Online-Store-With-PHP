<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login_petugas.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Produk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
    }

    body{
      background-color: #e9eceb;
    }

    .wrapper{
      display: flex;
      position: relative;
    }

    .wrapper .sidebar{
      width: 200px;
      height: 100%;
      background: #3274d6;
      padding: 30px 0px;
      position: fixed;
    }

    .wrapper .sidebar h4{
      color: #fff;
      text-align: center;
      margin-bottom: 30px;
    }

    .wrapper .sidebar ul li{
      padding: 15px;
      border-bottom: 1px solid #bdb8d7;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      border-top: 1px solid rgba(255,255,255,0.05);
    }    

    .wrapper .sidebar ul li a{
      color: #fff;
      display: block;
    }

    .wrapper .sidebar ul li a .fas{
      width: 25px;
    }

    .wrapper .sidebar ul li:hover{
      background-color: #000080;
    }
        
    .wrapper .sidebar ul li:hover a{
      color: #fff;
    }
    
    .wrapper .sidebar .social_media{
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
    }

    .wrapper .sidebar .social_media a{
      display: block;
      width: 200px;
      background: #000080;
      height: 45px;
      line-height: 45px;
      text-align: center;
      margin: 0 5px;
      color: #fff;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .wrapper .main_content{
      width: 100%;
      margin-left: 200px;
    }

    .wrapper .main_content .header{
      padding: 15px;
      background: #fff;
      color: #717171;
      border-bottom: 1px solid #e0e4e8;
    }

    .wrapper .main_content .info{
      margin: 20px;
      line-height: 20px;
    }

    .wrapper .main_content .info div{
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h4>Online Store</h4>
        <ul>
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="produk.php"><i class="fas fa-shopping-bag"></i>Produk</a></li>
            <li><a href="histori_pembelian.php"><i class="fas fa-address-card"></i>Transaksi</a></li>         
            <li><a href="tampil_produk.php"><i class="fas fa-box"></i> Detail</a></li>
            <li><a href="tampil_petugas.php"><i class="fas fa-chalkboard-teacher"></i> Petugas</a></li>
            <li><a href="tampil_pelanggan.php"><i class="fas fa-users"></i> Pelanggan</a></li>
        </ul> 
        <div class="social_media">
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </div>
    </div>
    <div class="main_content">
        <div class="header" align="center"> 
          <h4>Produk</h4>
        </div>  
        <div class="info">
            <?php
                include "koneksi.php";
                $qry_produk=mysqli_query($conn,"select * from produk");
                while($dt_produk=mysqli_fetch_array($qry_produk)){
            ?>
            <div class="card" style="width: 13rem; height: 25rem; float: left; margin: 22px;">
              <img src="assets/foto_produk/<?=$dt_produk['foto_produk']?>" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                  <p class="card-text"><?=substr($dt_produk['deskripsi'],0,30)?></p>
                  <p class="card-text" style="color:red;">Rp. <?=$dt_produk['harga']?></p> 
                  <a href="tampil_produk.php" class="btn btn-warning">Detail</a>
                  <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<footer>
    <hr>
    <div class="container">
        <p class="float-right">
            <a> <i class="fa fa-shopping-cart " aria-hidden="true"></i>  Online Store </a>
        <p>
    </div>
</footer>
</body>
</html>