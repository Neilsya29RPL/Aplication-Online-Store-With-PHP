<?php
 session_start();
 include "koneksi.php";
 $cart=@$_SESSION['cart'];

 if(count($cart)>0){
        mysqli_query($conn,"insert into pembelian_produk (id_pembelian_produk,id_petugas,tanggal_beli) 
        value('','".$_SESSION['id_petugas']."','".date('Y-m-d')."')");

    $id=mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($conn,"insert into detail_pembelian_produk (id_pembelian_produk,id_produk,qty) 
        value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
}
?>