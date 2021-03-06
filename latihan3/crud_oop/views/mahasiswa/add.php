<?php
    // ambil file controller 
    require_once 'controllers/Mahasiswa.php';

    // buat object dari class Mahasiswa
    $mahasiswa = new Mahasiswa();

    // jika button submit diklik
    if(isset($_POST['proses'])) {
        // siapkan data yg akan dikirim
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        // eksekusi fungsi insert yg ada di controller
        $mahasiswa->insert($nama, $nim, $tanggal_lahir);

    }

?>
<!-- form untuk menginput data mahasiswa ke database -->

<h1>Form Tambah</h1>
<form method="post">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Submit</button>
</form>