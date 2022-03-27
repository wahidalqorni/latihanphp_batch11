<?php

    class Makananfavorite {
         // pertama kali yg dieksekusi saat class dipanggil
         function __construct()
         {
             // panggil file koneksi databse
             require_once 'config/Database.php';
         }

         public function listMakananFavorite()
         {
             // buat object dari class database
            $db = new Database();

            // panggil fungsi koneksi database
            $mysqli = $db->koneksi();

            // varibael $sql untuk menampung codingan/script SQL
            $sql = 'SELECT makanan_favorite.*, mahasiswa.nim, mahasiswa.nama as nama_mahasiswa FROM makanan_favorite JOIN mahasiswa ON mahasiswa.id = makanan_favorite.mahasiswa_id ORDER BY mahasiswa.nim ASC ';

            // variabel utk hasil sqlnya
            $result = $mysqli->query($sql);
            // var_dump($result->fetch_array());
            // lakukan perulangan datanya

            while ($data  = $result->fetch_array() ) {
                $hasil[] = $data;
            }

            $mysqli->close();

            // var_dump($hasil);
            return $hasil;
         }

        //  insert data
        public function insert($nama, $mahasiswa_id)
        {
            $db = new Database();

            $mysqli = $db->koneksi();

            $nama_input = $mysqli->real_escape_string($nama); 

            $sql = "INSERT INTO makanan_favorite (nama, mahasiswa_id) VALUES ('$nama_input', '$mahasiswa_id') ";

            $result = $mysqli->query($sql);
            
            if($result == true) {
                echo "<script> window.location.href = '?page=makananfavorite'; </script>";
            } else {
                echo "<script> window.location.href = '?page=makananfavorite&action=add'; </script>";
            }
        }

        // menampilkan data makanan berdasarkan id yg dipilih
        public function makananFavoriteById($id)
        {
            $db = new Database();

            $mysqli = $db->koneksi();

            $sql = "SELECT makanan_favorite.*, mahasiswa.nim, mahasiswa.nama as nama_mahasiswa FROM makanan_favorite JOIN mahasiswa ON mahasiswa.id = makanan_favorite.mahasiswa_id WHERE makanan_favorite.id = '$id' ";

            // variabel utk hasil sqlnya
            $result = $mysqli->query($sql);

            // $data = untuk menampung data dari fungsi query
            // bertipe array
            $data = $result->fetch_array();
            
            return $data;
        }

        public function update($id, $nama, $mahasiswa_id )
        {
            $db = new Database();

            $mysqli = $db->koneksi();

            $nama_input = $mysqli->real_escape_string($nama); 

            $sql= "UPDATE makanan_favorite SET nama = '$nama_input', mahasiswa_id = '$mahasiswa_id' WHERE id = '$id'  ";

            // untuk mengeksekusi fungsi query dr mysql
            $result= $mysqli->query($sql);

            if($result == true) {
                echo "<script> window.location.href = '?page=makananfavorite'; </script>";
            } else {
                echo "<script> window.location.href = '?page=makananfavorite&action=edit'; </script>";
            }
        }


    }

?>