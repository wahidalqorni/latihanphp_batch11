<?php
    require_once 'controllers/Mahasiswa.php';

    $mahasiswa = new Mahasiswa();

    // panggil fungsi untuk menampilkan data
    $data = $mahasiswa->listMahasiswa();
?>
<h1>Daftar Mahasiswa</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <a href="index.php?page=mahasiswa&action=add" class="btn btn-primary" >Tambah Data</a>
        <!-- perulangan datanya dari database -->
        <?php 
            $no = 1;
            foreach($data as $dt){
        ?>
            
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dt['nim'] ?></td>
            <td><?php echo $dt['nama'] ?></td>
            <td><?php echo $dt['tanggal_lahir'] ?></td>
            <td>
                <!-- action -->
                <a href="index.php?page=mahasiswa&action=edit&id=<?php echo $dt['id'] ?>" class="btn btn-success">Edit</a>
                <a href="index.php?page=mahasiswa&action=delete&id=<?php echo $dt['id'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
         <?php } ?>
    </tbody>
</table>