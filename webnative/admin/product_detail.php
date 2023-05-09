<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);

?>

<div>
<br>
    <h3>Kode : <?= $produk['kode'] ?></h3>
    <h3>Nama : <?= $produk['nama'] ?></h3>
    <h3>Harga Beli : <?= $produk['harga_beli'] ?></h3>
    <h3>Harga Jual : <?= $produk['harga_jual'] ?></h3>
    <h3>Stok : <?= $produk['stok'] ?></h3>
    <h3>Minimal Stok : <?= $produk['min_stok'] ?></h3>
    <h3>Jenis Produk ID : <?= $produk['jenis_produk_id'] ?></h3>
</div>