<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan Buku Pokok Pemakaman(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <header id="header" class="fixed-top"> 
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="image\Badung.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                Disdukcapil Badung
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Daftar Pengguna <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Log Out</a>
                </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    
    <div class="wrapper mt-15">
        <div class="logo">
            <img src="image\edit_pengguna.png" alt="">
        </div>
        <!-- <div class="text-center mt-2 name">
           Pelaporan Buku Pokok Pemakaman
        </div> -->
        <form class="p-3 mt-3" id="edit_form" name=edit_form method="post">
        <input type=hidden name=st value=0>
            <div class="input-group mb-3">
                <select class="form-select form-field" aria-label="Default select example" name=kecamatan id='s1'>
                    <option value=''>--Kecamatan--</option>
                    <?Php
                        require "config.php";// connection to database 
                        $sql="SELECT * FROM `kecamatan`";
                        foreach ($dbo->query($sql) as $row) {
                        echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                        }
                    ?>
                </select>
                <select class="form-select form-field" name=desa aria-label="Default select example" id="s2">
                    <option value=''>--Desa/Kel--</option>
                </select>
                <select class="form-select form-field" name=dusun aria-label="Default select example" id="s3">
                    <option value='title'>--Dusun--</option>
                </select>
            </div>
            <!-- <div class="form-field align-items-center" id="opsionalDusun">
                <span class="far fa-user"></span>
                <input type="text" name="nama_dusun_baru" id="nama_dusun_baru" placeholder="Nama Dusun">
            </div> -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="NIK" id="NIK" placeholder="NIK">
            </div>
            <div class="field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Username" disabled="disabled">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-check form-switch">
                <input class='input-switch' type="checkbox" id="demo"/>
                <label class="label-switch" for="demo"></label>
                <span class="info-text" for="input-switch"></span>
            </div>
            <div style="text-align:center">
                <button class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel" value="cancel" id="cancel">Batal</button>
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "update" value="update" id="update" >Perbarui</button>
            </div>
    </div>
</body>
</html>