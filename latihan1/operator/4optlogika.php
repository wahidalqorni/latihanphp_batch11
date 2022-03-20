<?php
// file index.php adalah file yg pertama kali akan dieksekusi saat project php dijalankan
// saat kita akses alamat dari project tersebut
$title_head = 'Latihan Operator Logika';
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
    $d = '3';

    $c = $a > $b;
    echo "apakah benar $a > $b ?  Jawaban : $c <hr>";

    $c = $a < $b;
    echo "apakah benar $a < $b ?  Jawaban : $c <hr>";

    $c = $a == $b;
    echo "apakah benar $a == $b ?  Jawaban : $c <hr>";

    $c = $b === $d; // akan mengecek nilai beserta tipe datanya
    echo "apakah benar $b === $b ?  Jawaban : $c <hr>";

    $c = $a != $b;
    echo "apakah benar $a != $b ?  Jawaban : $c <hr>";

    $c = $a >= $b;
    echo "apakah benar $a >= $b ?  Jawaban : $c <hr>";

    $c = $a <= $b;
    echo "apakah benar $a <= $b ?  Jawaban : $c <hr>";
    ?>
</body>
</html>