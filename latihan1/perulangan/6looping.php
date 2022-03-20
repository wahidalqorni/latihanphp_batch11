<?php
// file index.php adalah file yg pertama kali akan dieksekusi saat project php dijalankan
// saat kita akses alamat dari project tersebut
$title_head = 'Latihan Looping';
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
        // looping / perulangan untuk menampilkan data secara berulang atau bertambah2 sebanyak nilai yang didefinisikan

        // looping for (perulangan yang diketahui nilai akhirnya)
        for ($i=1; $i <= 10 ; $i++) { 
            echo "Hello ke - $i <br>";
        }

        echo "<hr>";

        // looping while (perulangan yang tidak diketahui nilai akhirnya)
        $nilai = 1;
        while ($nilai <= 10) {
            echo "Hello ke - $nilai <br>";
            $nilai++;
        }

        echo "<hr>";

        // looping for mundur
        for ($i=10; $i >= 1 ; $i--) { 
            echo "Hello ke - $i <br>";
        }

        echo "<hr>";
        // looping array / foreach
        $data = array(
            'data1',
            'data2',
            'data3'
        );

        foreach($data as $dt) {
            echo "$dt <br>";
        }

    ?>

    <hr>

    <?php
      // bentuk/format data dari database yg biasa tampil adalah seperti di bawah ini 
      $data2 = array(

        array(
            // key | value
            "id" => 1,
            "nim" => "111",
            "nama" => "Mahasiswa 1"
        ),

        array(
            "id" => 2,
            "nim" => "112",
            "nama" => "Mahasiswa 2"
        ),

    );

    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data2 as $dt2 ) { 
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt2['nim'] ?></td>
                <td><?php echo $dt2['nama'] ?></td>
            </tr>
            <?php 
                } 
            ?> 
        </tbody>
    </table>

</body>
</html>