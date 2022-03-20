<?php
// file index.php adalah file yg pertama kali akan dieksekusi saat project php dijalankan
// saat kita akses alamat dari project tersebut
$title_head = 'Latihan If Else';
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
        // statement if else menunjukkan pada suatu keadaan yang memenuhi syarat atau tidak
        $nUTS = 70;
        $nUAS = 98;
        $nRata = ($nUTS + $nUAS) / 2;
        $indeks = ""; // nilai awal variabel indeks adalah string kosong
        // rata-rata 90 - 100 maka A
        // rata-rata 80 - 89 maka B
        // rata-rata 70 - 79 maka C
        // rata-rata 60 - 69 maka D
        // rata-rata di bawah 60 maka E

        // persyaratan
        if($nRata >= 90 && $nRata <= 100 ){
            // maka
            $indeks = "A"; // setelah ada proses, maka ubah nilai variabel indeksnya
        } else if($nRata >= 80 && $nRata <= 89 ) {
            $indeks = "B";
        } else if($nRata >= 70 && $nRata <= 79 ) {
            $indeks = "C";
        } else if($nRata >= 60 && $nRata <= 69 ) {
            $indeks = "D";
        } else if($nRata < 60) {
            $indeks = "E";
            
        } else { // kondisi terakhir jika hasil dari nRata tidak memenuhi syarat manapun
            $indeks = "Tidak terdefinisi / Undefined";
        }

        echo "<h2>Nilai yang di dapat adalah $nRata : $indeks </h2>";
    ?>
</body>
</html>