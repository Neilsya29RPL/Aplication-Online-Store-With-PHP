<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Pelanggan</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      margin: 50px;
      line-height: 25px;
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
            <li><a href="tampil_produk.php"><i class="fas fa-box"></i> Produk</a></li>
            <li><a href="tampil_petugas.php"><i class="fas fa-chalkboard-teacher"></i> Petugas</a></li>
            <li><a href="tampil_pelanggan.php"><i class="fas fa-users"></i> Pelanggan</a></li>
        </ul> 
        <div class="social_media">
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </div>
    </div>
    <div class="main_content">
        <div class="header" align="center">
          <h4>Pelanggan</h4>
        </div>  
        <div class="info">
            <table class="table table-striped" >
                <thead style="background-color: #3274d6" align="center">
                    <tr style="color: white">
                        <th>NO</th><th>NAMA</th><th>ALAMAT</th>
                        <th>TELP</th></th><th>AKSI</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                        include "koneksi.php";
                        $qry_pelanggan=mysqli_query($conn,"select * from pelanggan");
                        $no=0;
                        while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){
                        $no++;
                    ?>
                        <tr>
                            <td><?=$no?></td><td><?=$data_pelanggan['nama']?></td>
                            <td><?=$data_pelanggan['alamat']?></td>
                            <td><?=$data_pelanggan['telp']?></td>
                            <td><a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success">Ubah</a> 
                            <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                        </tr>
                    <?php
                    }
                    ?>

                    <?php
                    ?>
                </tbody>
            </table>
            <td><a href="tambah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-primary">Tambah Pelanggan</a></td>
        </div>
    </div>
</div>
</body>
</html>