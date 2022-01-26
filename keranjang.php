<?php
include "header.php";
?>
<style>
    body{
        background-color: #4682b4;
    }
</style>
<nav class="navbar navbar-expand-lg" style="margin-top: 40px" >
    <h3>Keranjang</h3>
</nav >
<table class="table table-bordered border-secondary">
    <thead style="background-color: #cccdcc" align="center">
        <tr>
            <th>NO</th><th>Nama Produk</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
        <tr>
            <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_produk']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="produk.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
<a href="checkout.php" class="btn btn-success">Check Out</a> 
<hr>

