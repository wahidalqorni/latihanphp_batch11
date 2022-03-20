<?php 
    // file index.php adalah file yg pertama kali akan dieksekusi saat project php dijalankan
    // saat kita akses alamat dari project tersebut
    $title_head = "Landing Page";
    $title_body = "Selamat Datang di Website Ku";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_head ?></title>
</head>
<body>
    <!-- ini komentar tag html -->
    <h1><?php echo $title_body ?></h1>
    <hr>
    <a href="1text.php">Text</a>
    <a href="2variabel.php">Variabel</a>
    <a href="operator/3operator.php">Operator</a>
</body>
</html>