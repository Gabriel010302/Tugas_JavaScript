<?php
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111','Andi','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('01112','Syifa','Staff','Islam','Menikah');
$pegawai3 = new Pegawai('01113','Danu','Kepala Bagian','Kristen','Belum Menikah');
$pegawai4 = new Pegawai('01114','Annie','Asisten Manager','Islam','Menikah');
$pegawai5 = new Pegawai('01115','Andi','Manager','Buddha','Belum Menikah');


$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
