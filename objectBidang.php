<?php
require_once 'Lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'Segitiga.php';

$L = new Lingkaran (8);
$P2 = new persegiPanjang (4,9);
$S = new Segitiga (2,10,6);

$ar_bidang = [$L,$P2,$S];

?>
<table align="center" border='2'>
    <h1 align="center">Hasil Luas dan Keliling</h1>
    <tr>
        <th>Nama Bidang</th>
        <th>Luas Bidang</th>
        <th>Keliling Bidang</th>
    </tr>

<?php
foreach ($ar_bidang as $bidang){
    echo "<tr>";
    echo '<td>'.$bidang->namaBidang();
    echo '<td>'.$bidang->luasBidang();
    echo '<td>'.$bidang->kelilingBidang();
    echo "</tr>";
}
?>
</table>