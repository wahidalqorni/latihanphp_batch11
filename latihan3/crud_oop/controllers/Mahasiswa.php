<?php

    class Mahasiswa {

        // pertama kali yg dieksekusi saat class dipanggil
        function __construct()
        {
            // panggil file koneksi databse
            require_once 'config/Database.php';
        }
        
        // fungsi menampilkdan data
        public function listMahasiswa(){
            // buat object dari class database
            $db = new Database();

            // panggil fungsi koneksi database
            $mysqli = $db->koneksi();

            // varibael $sql untuk menampung codingan/script SQL
            $sql = 'SELECT * FROM mahasiswa ORDER BY nim ASC ';

            // variabel utk hasil sqlnya
            $result = $mysqli->query($sql);
            var_dump($result->fetch_array());
            // lakukan perulangan datanya

            while ($data  = $result->fetch_array() ) {
                $hasil[] = $data;
            }

            $mysqli->close();

            return $hasil;
        }

        // fungsi menampilkdan data berdasarkan id 
        public function mahasiswaById($id){}

        // fungsi menginsert data ke database
        public function insert($nama, $nim, $tanggal_lahir){

        }

        // fungsi update data mahasiswa
        public function update($id, $nama,  $nim, $tanggal_lahir)
        {

        }

        // fungsi delete data
        public function delete($id)
        {

        }
    }

?>