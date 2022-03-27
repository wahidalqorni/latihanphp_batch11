<?php
    // ambil file controller 
    require_once 'controllers/Makananfavorite.php';
    require_once 'controllers/Mahasiswa.php';

    // buat object dari class Mahasiswa
    $makananfavorite = new Makananfavorite();

    // object mahasiswa untuk memanggil fungsi listMahasiswa()
    $mahasiswa = new Mahasiswa();

    // buat penampung data list dari mahasiswa, fungsinya ambil dari class Mahasiswa
    $data = $mahasiswa->listMahasiswa();


    // jika button submit diklik
    if(isset($_POST['proses'])) {
        // siapkan data yg akan dikirim
        $nama = $_POST['nama'];
        $mahasiswa_id = $_POST['mahasiswa_id'];

        // eksekusi fungsi insert yg ada di controller
        $makananfavorite->insert($nama, $mahasiswa_id);

    }

?>
<!-- form untuk menginput data mahasiswa ke database -->

<h1>Form Tambah</h1>
<form method="post">
  <div class="mb-3">
    <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
    <select name="mahasiswa_id" id="" class="form-control">
      <!-- isinya kita ambil dari tabel mahasiswa -->
      <option value="">--Pilih--</option>
      <?php foreach($data as $mhs) { ?>
        <option value="<?php echo $mhs['id'] ?>"> <?php echo $mhs['nim'] ?> | <?php echo $mhs['nama'] ?> </option>
      <?php } ?>
    </select>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Submit</button>
</form>