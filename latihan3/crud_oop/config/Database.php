<?php

    // kasih nama classnya

    class Database {

        // buat paramaeter untuk koneksi database mysql
        private $dbHost = 'localhost';
        private $dbUser = 'root';
        private $dbPassword = '';
        private $dbName = 'sistem_sekolah';

        // buat fungsi untuk koneksi ke database mysql
        public function koneksi()
        {
            // bahwasannya si variabel $mysqli menyimpan nilai dari fungsi koneksi database mysql

            // buat object dari class mysqli yg ada di pemrograman php
            $mysqli = new mysqli(
                $this->dbHost,
                $this->dbUser,
                $this->dbPassword,
                $this->dbName,
            );

            // cek apaakah databse sudah terkoneksi atau tidak
            if($mysqli->connect_error) {
                echo 'Gagal koneksi ('.$mysqli->connect_error.') ';
            }

            // var_dump($mysqli);

            return $mysqli;
        }

    }

?>