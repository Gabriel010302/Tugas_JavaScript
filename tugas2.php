<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <h1 allign="center"> Masukan Data Anda </h1>
    <form  action = "" method="POST">
        <label> Nama </label>
        <input type="text" name="nama" placeholder="Masukan Nama"> <br>
        <label> Jabatan </label> <br>
        <select name="jabatan">
            <option>---- Pilih Jabatan Anda ----</option>
            <option value="Manager"> Manager </option>
            <option value="Asisten"> Asisten </option>
            <option value="Kabag"> Kabag </option>
            <option value="Staff"> Staff </option>
        </select> <br>
        <label> Status </label> <br>
        <select name="status">
            <option>---- Pilih Status Anda ----</option>
            <option value="Belum Menikah"> Belum Menikah </option>
            <option value="Menikah1"> Menikah, Anak 1-2 </option>
            <option value="Menikah2"> Menikah, Anak 3-5 </option>
        </select> <br>
        <label> Agama </label> <br>
        <select name="agama"> 
            <option>---- Pilih Agama Anda ----</option>
            <option value="Islam"> Islam </option>
            <option value="Kristen"> Kristen </option>
            <option value="Buddha"> Buddha </option>
            <option value="Hindu"> Hindu </option>
            <option value="Khonghucu"> Khonghucu </option>
        </select> <br>
        <button type="submit" name="proses"> Submit </button> 
</form>
<?php
error_reporting(0);
$nama = $_POST ['nama'];
$jabatan = $_POST ['jabatan'];
$status = $_POST ['status'];
$agama = $_POST ['agama'];
$button = $_POST ['proses'];

// Menghhitung Gaji Pokok & gajpok = gaji  pokok
switch ($jabatan) {
    case "Manager" : $gajpok = 20000000; break;
    case "Asisten" : $gajpok = 20000000; break;
    case "Kabag" : $gajpok = 20000000; break;
    case "Staff" : $gajpok = 20000000; break;
    default : $gajpok = 0;
}

// Menghitung tunjangan jabatan & tujban = tunjangan jabatan
$tujban = $gajpok * 0.2;

// Menghitung tunjangan keluarga
if ($status == "Belum Menikah") $tunjanganKeluarga = 0;
else if ($status == "Menikah1") $tunjanganKeluarga = $gajpok * 0.05;
else if ($status == "Menikah2") $tunjanganKeluarga = $gajpok * 0.1;
else $tunjanganKeluarga = 0;

// Menghitung gaji kotor
$gajiKotor = $gajpok + $tujban + $tunjanganKeluarga;

// Menghitung zakat profesi
$zakatProfesi = ($agama == "Islam" && $gajpok >= 6000000) ? $gajiKotor * 0.025 : 0;

// Menghitung gaji bersih
$gajiBersih = $gajiKotor - $zakatProfesi;

if(isset($button)){
?>
Nama : <?= $nama ?>
<br> Jabatan  : <?= $jabatan ?>
<br> Status  : <?= $status ?>
<br> Agama  : <?= $agama ?>
<br> Gaji Pokok  : <?= $gajpok ?>
<br> Tunjangan Jabatan  : <?= $tujban ?>
<br> Tunjangan Keluarga  : <?= $tunjanganKeluarga ?>
<br> Gaji Kotor  : <?= $gajiKotor ?>
<br> Zakat Profesi  : <?= $zakatProfesi ?>
<br> Gaji Bersih  : <?= $gajiBersih ?>


<?php } ?>


</body>
</html>