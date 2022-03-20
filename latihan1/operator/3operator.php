<?php
// file index.php adalah file yg pertama kali akan dieksekusi saat project php dijalankan
// saat kita akses alamat dari project tersebut
$title_head = 'Latihan Operator';
$title_body = 'Selamat Datang di Website Ku';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_head; ?></title>
</head>
<body>
    <?php
    $a = 7;
    $b = 3;

    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $sisabagi = $a % $b;
    $pangkat = $a ** $b;
    ?>

    <p>
        Hasil : <?php echo $a; ?> + <?php echo $b; ?>
        <br>
        Adalah : <?php echo $penjumlahan; ?>
    </p>

    <p>
        Hasil : <?php echo $a; ?> <sup> <?php echo $b; ?> </sup>
        <br>
        Adalah : <?php echo $pangkat; ?>
    </p>

</body>
</html>