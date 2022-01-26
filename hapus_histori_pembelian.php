<?php
if($_GET['id_pembelian_produk']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from pembelian_produk where id_pembelian_produk='".$_GET['id_pembelian_produk']."'");
if($qry_hapus){
    echo "<script>alert('Sukses hapus transaksi');location.href='histori_pembelian.php';</script>";
} else {
    echo "<script>alert('Gagal hapus transaksi');location.href='histori_pembelian.php';</script>";
}
}
?>