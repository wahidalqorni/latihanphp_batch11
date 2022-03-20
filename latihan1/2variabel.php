<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Variabel</title>
</head>
<body>
    <?php
        // variabel adalah sesuatu untuk menyimpan sebuah data / nilai
        // cara penulisan : diawali dengan simbol $
        // contoh : $nama, $tanggal_lahir, $_tempat_lahir
        // penamaan tidak boleh menggunakan spasi apabila nama variabel terdiri lebih dari satu kata
        // tidak boleh diawali dengan angka
        // variabel di PHP bersifat dynamic (sistem langsung mendeteksi tipe data variabel yg dituliskan)
        // tanpa perlu kita menspesifikan tipe datanya

        // JAVA
        // String nama_lengkap = "namanya";

        // DART
        // String nama_lengkap = "none";

        // var = 0;

        $nama_lengkap =  "M. Wahid Alqorni";
        $tempat_lahir = "Palembang";
        $makanan_favorite = "Nasgor";
    ?>

    <h1>Selamat Datang, <?php echo $nama_lengkap ?> </h1>
    <p>Tempat Lahir : <?php echo $tempat_lahir ?> </p>
    <?php echo "<p> Makanan Favorite : $makanan_favorite </p>" ?>
</body>
</html>