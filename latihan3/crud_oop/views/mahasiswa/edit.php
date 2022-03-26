<?php
    require_once 'controllers/Mahasiswa.php';

    $id = $_GET['id'];
    // buat object dari class Mahasiswa
    $mahasiswa = new Mahasiswa();
    $data = $mahasiswa->mahasiswaById($id);

    if(isset($_POST['proses'])) {
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        $mahasiswa->update($id, $nama, $nim, $tanggal_lahir);
    }

?>
<!-- form yang menampilkan data mahasiswa yang dipilih -->
<!-- dipilih berdasarkan id mahasiswa -->
<!-- datanya dpt dari tabel mahasiswa -->
<h1>Form Edit</h1>

<form method="post">
  <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" >
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim'] ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" >
  </div>
  <div class="mb-3">
    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Submit</button>
</form>