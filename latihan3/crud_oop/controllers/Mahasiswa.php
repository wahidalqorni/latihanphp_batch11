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
            // var_dump($result->fetch_array());
            // lakukan perulangan datanya

            while ($data  = $result->fetch_array() ) {
                $hasil[] = $data;
            }

            $mysqli->close();

            // var_dump($hasil);
            return $hasil;
        }

        // fungsi menampilkdan data berdasarkan id 
        public function mahasiswaById($id){
            $db = new Database();

            $mysqli = $db->koneksi();

            $sql = "SELECT * FROM mahasiswa WHERE id = '$id' ";

            // variabel utk hasil sqlnya
            $result = $mysqli->query($sql);

            // $data = untuk menampung data dari fungsi query
            // bertipe array
            $data = $result->fetch_array();
            
            return $data;
        }

        // fungsi menginsert data ke database
        public function insert($nama, $nim, $tanggal_lahir){
            $db = new Database();

            $mysqli = $db->koneksi();

            $nama_input = $mysqli->real_escape_string($nama); 
            $nim_input = $mysqli->real_escape_string($nim);

            $sql = "INSERT INTO mahasiswa (nama, nim, tanggal_lahir) VALUES ('$nama_input', '$nim_input', '$tanggal_lahir' ) ";

            $result = $mysqli->query($sql);
            
            if($result == true) {
                echo "<script> window.location.href = '?page=mahasiswa'; </script>";
            } else {
                echo "<script> window.location.href = '?page=mahasiswa&action=add'; </script>";
            }

        }

        // fungsi update data mahasiswa
        public function update($id, $nama,  $nim, $tanggal_lahir)
        {
            $db = new Database();

            $mysqli = $db->koneksi();

            $nama_input = $mysqli->real_escape_string($nama); 
            $nim_input = $mysqli->real_escape_string($nim);  

            $sql= "UPDATE mahasiswa SET nama = '$nama_input', nim = '$nim_input', tanggal_lahir = '$tanggal_lahir' WHERE id = '$id'  ";

            // untuk mengeksekusi fungsi query dr mysql
            $result= $mysqli->query($sql);

            if($result == true) {
                echo "<script> window.location.href = '?page=mahasiswa'; </script>";
            } else {
                echo "<script> window.location.href = '?page=mahasiswa&action=edit'; </script>";
            }

        }

        // fungsi delete data
        public function delete($id)
        {
            $db = new Database();

            $mysqli = $db->koneksi();

            $sql = " DELETE FROM mahasiswa WHERE id = '$id'  ";

            $result = $mysqli->query($sql);

            if($result == true) {
                echo "<script> window.location.href = '?page=mahasiswa'; </script>";
            } else {
                echo "<script> window.location.href = '?page=mahasiswa'; </script>";
            }

        }
    }

?>