<?php
    require_once 'controllers/Mahasiswa.php';

    $mahasiswa = new Mahasiswa();

    if(isset($_GET['id'])) {
        // siapkan data yg akan dikirim ke fungsi delete
        $id = $_GET['id'];

        // panggil fungsi delete yg ada di controller Mahasiswa
        $mahasiswa->delete($id);
    }

?>