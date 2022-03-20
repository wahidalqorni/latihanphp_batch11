<?php
// file index.php adalah file yg pertama kali akan dieksekusi saat project php dijalankan
// saat kita akses alamat dari project tersebut
$title_head = 'Latihan Array';
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
    // array adalah tipe data yang dapat menyimpan lebih dari satu nilai
    // penulisan tipe data array bisa dengan [] atau array()
    // array berisi data yg tersimpan dlam indeks2
    // array dimulai dari indeks ke 0

    // di bawah ini namanya indexed array
    $keranjang_buah = ['Apel', 'Anggur', 'Mangga', 'Semangka', 1, 2];

    echo $keranjang_buah[3]; //menampilkan data array indeks yg ke berapa

    var_dump($keranjang_buah); //var_dump berfungsi utk mencetak data mentahan (menampilkan tipe data, jumlah data dsb)

    // di bawah ini merupakan array associative
    // datanya terdiri dari key dan value
    $usia = array(
        //key  | value
        "Dani" => 10,
        "Edo" => 19,
        "Fariz" => 20
    );

    echo $usia["Dani"];

    ?>

    <hr>
    <h4>Tampilkan seluruh isi array</h4>
    <h2>Indexed Array</h2>
    <ol>
        <?php foreach ($keranjang_buah as $kb) { ?>
            <li><?php echo $kb ?></li>
        <?php } ?>
    </ol>
    
    <h2>Array Associative</h2>
    <ol>
        <?php foreach ($usia as $us => $value) { ?>
            <li><?php echo "Key : $us " ?> <?php echo "Value :  $value "?> </li>
        <?php } ?>
    </ol>
    

</body>
</html>