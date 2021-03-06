<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aplikasi Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- anchor | methodnya GET -->
                    <!-- anchor -->
                <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                <a href="index.php?page=makananfavorite" class="nav-link">Makanan Favorite</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a href="https://sydemy.com" class="nav-link">Synapse Academy</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mt-4">
        <?php
        
            // cek apakah penyuplai variabel page/action sudah disenggol
            if(isset($_GET['page'])   ) {
                // variabel page untuk mendefinisikan page yang dituju
                $page = $_GET['page'];

                // variabel action untuk mendefinisikan action yg dilakukan
                $action = @$_GET['action'];

                // buat kondisi sesuai nilai page yang dipilih
                if($page == 'home' || $page == '' || $page == null ) {
                    require_once 'views/dashboard/index.php';
                } else if($page == 'mahasiswa') {
                    // cek dulu actionnya
                    if($action == '') {
                        require_once 'views/mahasiswa/list.php';
                    } elseif($action == 'add') {
                        require_once 'views/mahasiswa/add.php';
                    } elseif($action == 'edit') {
                        require_once 'views/mahasiswa/edit.php';
                    } elseif($action == 'delete') {
                        require_once 'views/mahasiswa/delete.php';
                    }
                } elseif($page == 'makananfavorite') {
                    if($action == '' ) {
                        require_once 'views/makananfavorite/list.php';
                    } elseif($action == 'add') {
                        require_once 'views/makananfavorite/add.php';
                    } elseif($action == 'edit') {
                        require_once 'views/makananfavorite/edit.php';
                    }
                }
            } else {
                require_once 'views/dashboard/index.php';
            }
            
        ?>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>