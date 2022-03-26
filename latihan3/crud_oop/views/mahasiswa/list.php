<?php
    require_once 'controllers/Mahasiswa.php';

    $mahasiswa = new Mahasiswa();

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
        <!-- perulangan datanya dari database -->
        <?php foreach($data as $dt) { ?>
        <tr>
            <td><?php echo $dt['nim'] ?></td>
            <td><?php echo $dt['nama'] ?></td>
            <td><?php echo $dt['tanggal_lahir'] ?></td>
            <td>
                
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>