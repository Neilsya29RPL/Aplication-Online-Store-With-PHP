<?php
    include "header.php";
    include "koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<style>
body{
    background-color: #4682b4;
    }
</style>
<nav class="navbar navbar-expand-lg" style="margin-top: 100px" >
    <h3>Beli Produk</h3>
</nav>
<div class="row">
    <div class="col-md-4" style="width: 20rem">
        <img src="assets/foto_produk/<?=$dt_produk['foto_produk']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Produk</td><td><?=$dt_produk['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td><td><?=$dt_produk['harga']?></td>
                    </tr>
                        <td>Jumlah Beli</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Beli">
                        <a href="produk.php" class="btn btn-primary" type="submit" value="BATAL">Batal</a>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<hr>
