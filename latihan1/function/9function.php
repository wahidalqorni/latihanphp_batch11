<?php

// function adalah untuk membuat fungsi
// function ini nantinya bisa kita pakai berulang di manapun
// function salah satunya berguna utk mempersingkat kodingan / efisiensi

    function luasSegitiga($alas, $tinggi)
    {
        $luas = $alas * $tinggi / 2;

        return $luas; // mengembalikan hasil proses yg ada di function agar hasilnya bisa didistribusikan ke file2 yg memanggil function ini
    }

    function hello($nama)
    {
        echo "Nama yg diinput : $nama";
    }

    // segitiga 1
    // . => Concat / Pemisah String
    // echo "Segitiga 1 ". luasSegitiga(5, 9 ) . "<br>";

    // segitiga 2
    // echo "Segitiga 2 ". luasSegitiga(7, 12 ) . "<br>";

    // hello("Jhon");


?>