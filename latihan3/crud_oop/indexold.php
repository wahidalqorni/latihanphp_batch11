<?php
    require_once 'config/Database.php';
    //  buat object dari class Dataabse yang telah dibuat
    $database = new Database();

    // panggil fungsi koneksi yg ada di class Database
    $teskoneksi = $database->koneksi();

    require_once 'controllers/Mahasiswa.php';

    $mahasiswa = new Mahasiswa();

    // cara memanggil method yg ada di kelas yg sudah kita jadikan object
    // panggil variabel objectnya ($mahasiswa) setelah itu tambahkan tanda -> dan panggil nama methodnya
    // contoh $mahasiswa->listMahasiswa();
    $mahasiswa->listMahasiswa();

?>