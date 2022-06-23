<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <header id="header" class="fixed-top"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="image\Badung.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                Disdukcapil Badung
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="Dusun_Page.php">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Laporan<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dusun_Pelaporan.php">Formulir</a>
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

    <section class="laporan container">
        <form class="container-laporan-buku container row">
        <div class="logo col-5">
                    <img src="image\bukupokok.png" alt="">
        </div>
        <div class="col-7 content">
            <div class="form-row mt-lg-5">
                
                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control" id="inputdusun" placeholder="Dusun">
                </div>
                <div class="form-group ml-md-4">
                    <label for="kelurahan">Kelurahan/Desa</label>
                    <input type="text" class="form-control" id="inputkeldes" placeholder="Kelurahan/Desa">
                </div>
                <div class="form-group ml-md-4">
                    <label for="kelurahan">Kecamatan</label>
                    <input type="text" class="form-control" id="inputkeldes" placeholder="Kecamatan">
                </div>
            </div>

            <div class="mt-3 content" >
                    <div class="form-group row ">
                        <label for="inputState" class="col-3">Akta Kematian</label>
                        <select id="inputState" class="col-5">
                            <option selected>Pilih</option>
                            <option>Ada</option>
                            <option>Tidak</option>
                        </select>
                    </div>
            </div>

            <div class="form-row mt-lg-3">
                <div class=" d-lg-inline-flex align-items-center">
                    <label>Rentang</label>
                    <div class="input-group date" id="datepicker1">
                        <input type="date" class="form-control ml-4" id="date">
                        <span class="input-group-append"></span>
                    </div>
                    <span class="ms-3">sampai</span>
                    <div class="input-group date" id="datepicker1">
                        <input type="date" class="form-control ml-4" id="date">
                        <span class="input-group-append"></span>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group mt-lg-5" style="width: 500px;">
                    <input type="text" class="form-control" id="inputcari" placeholder="Cari">
                    <span class="input-group-append"></span>
                </div>
                <div class="mt-lg-5">
                    <button type="submit" class="btn btn-outline-primary ml-lg-5 justify-content-end">Export</button>
                </div>
            </div>
            </div>

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Dusun</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tempat, Tanggal Meninggal</th>
                    <th scope="col">Tanggal Pemakaman</th>
                    <th scope="col">NIK Pelapor</th>
                    <th scope="col">Nama Pelapor</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>


            <nav aria-label="pagination">
                <ul class="pagination justify-content-end mt-lg-5">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                    <li class="page-item"><a class="page-link" href="#">1 <span class=" sr-only">(current)</span></a></li>
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </form>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer-top mt-lg-5">
            <div class="container_footer">
                <div class="row">
                    <div class="col-lg-6 col-md-12 footer-contact mt-3">
                        <h4>Dinas Kependudukan Dan Pencatatan Sipil<span></span></h4>
                        <p>
                            Pusat Pemerintahan Mangupraja Mandala,<br> 
                            Jl. Raya Sempidi Mengwi, <br> 
                            Badung-Bali <br><br>
                            <strong>Telepon:</strong> (0361) 894980<br>
                            <strong>Email:</strong> disdukcapil@badungkab.go.id<br>
                        </p>
                    </div>

                    <!-- <div class="col-lg-4 col-md-12 footer-links mt-3">
                        <h5>Menu Tersedia</h5>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Laporan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Formulir</a></li>
                        </ul>
                    </div> -->

                    <div class="col-lg-6 col-md-12 footer-links mt-3">
                        <h5>Media Sosial Kami</h5>
                        <p>Temukan kami dalam beberapa media sosial berikut ini.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    



</body>
</html>
