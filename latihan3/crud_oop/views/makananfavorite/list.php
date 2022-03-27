<?php
    require_once 'controllers/Makananfavorite.php';

    $makananfavorite = new Makananfavorite();

    // panggil fungsi untuk menampilkan data
    $data = $makananfavorite->listMakananFavorite();
?>
<h1>Daftar Makanan Favorite Mahasiswa</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Makanan Favorite</th>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <a href="index.php?page=makananfavorite&action=add" class="btn btn-primary" >Tambah Data</a>
        <!-- perulangan datanya dari database -->
        <?php 
            $no = 1;
            foreach($data as $dt){
        ?>
            
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dt['nim'] ?></td>
            <td><?php echo $dt['nama_mahasiswa'] ?></td>
            <td><?php echo $dt['nama'] ?></td>
            <td>
                <!-- action -->
                <a href="index.php?page=makananfavorite&action=edit&id=<?php echo $dt['id'] ?>" class="btn btn-success">Edit</a>
                <a href="index.php?page=makananfavorite&action=delete&id=<?php echo $dt['id'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
         <?php } ?>
    </tbody>
</table>