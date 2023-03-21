<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<body>
    <h1> Menghitung Ruang Bangun Datar Jajar Genjang </h1>

    <form method="POST">
    <table>
            <tr>
                <td>Alas</td>
                <td>
                    <input type="text" name="alas" require>
                </td>
            </tr>
                <td>Tinggi </td>
                <td>
                    <input type="text" name="tinggi" require>
                </td>
            </tr>
            </tr>
                <td>Sisi Miring </td>
                <td>
                    <input type="text" name="sisimiring" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
</table>
</form>
<?php
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisimiring = $_POST['sisimiring'];

        $luasjajargenjang = $alas * $tinggi;
        echo 'Hasil perhitungan Luas Jajar Genjang';
        echo '<br> Diketahui :';
        echo '<br> Alas :'.$alas;
        echo '<br> Tinggi :'.$tinggi;

        echo '<br> Maka Luasnya ' .$luasjajargenjang;


        echo '<hr>';
        $kelilingjajargenjang = 2*($alas + $sisimiring);
        echo 'Hasil Perhitungan Keliling Jajar Genjang';
        echo '<br> Diketahui :';
        echo '<br> Alas :'.$alas;
        echo '<br> Sisi miring :'.$sisimiring;

        echo '<br> Maka Kelilingnya ' .$kelilingjajargenjang;

    }
    ?>
</body>
</html>