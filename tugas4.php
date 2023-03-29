<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30,"Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya", "lainnya"];
?>
<fieldset style="background-color:aquamarine;">
    <legend>Form Registrasi Kelompok Belajar</legend>
<table>
    <thead>
        <tr>
            <th>Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td> 
                    <input type="radio" name="jk" value="Laki-laki" >Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="Laki-laki" >Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td> 
                    <select name="prodi">
                        <?php 

                        foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>

                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
    </table>
            

</fieldset>
<?php 

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];

    $skor_skill = 0;
    foreach ($skill as $s ){
        if(isset($ar_skill[$s])){
            $skor_skill += $ar_skill[$s];
        }
    }

    // Penentuan kategori skill dengan function
    function kategori_skill($skor_skill){
        if ($skor_skill >= 100 && $skor_skill <= 150) $hasil = 'Sangat Baik';
        else if ($skor_skill >= 60 && $skor_skill < 100) $hasil = 'Baik';
        else if ($skor_skill >= 40 && $skor_skill < 60) $hasil = 'Cukup';
        else if ($skor_skill >= 0 && $skor_skill < 40) $hasil = 'Kurang';
        else $hasil = 'Tidak Memadai';
        return $hasil;
    }
    
}
?>
<table>
<tr>
    <td>NIM : <?= $nim ?><td>
</tr>
<tr>
    <td>Nama : <?= $nama ?><td>
</tr>
<tr>
    <td>Jenis Kelamin <?= $jk ?><td>
</tr>
<tr>
    <td>Program Studi : <?= $prodi ?><td>
</tr>
<tr>
    <td>Skill : 
<?php 
foreach($skill as $s){ ?>
<?= $s ?> ,
<?php } ?>
</tr>
<tr>
    <td>Skorr Skill : <?= $skor_skill ?></td>
<tr>
<?php
$hasil = kategori_skill($skor_skill);
?>    
<tr>
    <td>Kategori Skill: <?= $hasil ?><tr>
</tr>
<tr>
    <td>Email : <?= $email ?> <td>
</tr>
