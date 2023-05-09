<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<div>
<br>
    <h3>Tanggal : <?= $pesanan['tanggal'] ?></h3>
    <h3>Total : <?= $pesanan['total'] ?></h3>
    <h3>Pelanggan ID :<?= $pesanan['pelanggan_id'] ?></h3>
</div>