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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        function ajaxFunction(choice)
        {
            var httpxml;
            try
            {
                // Firefox, Opera 8.0+, Safari
                httpxml=new XMLHttpRequest();
            }
            catch (e)
            {
        // Internet Explorer
                try
                {
                        httpxml=new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch (e)
                {
                    try
                    {
                        httpxml=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch (e)
                    {
                        alert("Your browser does not support AJAX!");
                        return false;
                    }
                }
            }
            function stateChanged() 
            {
                if(httpxml.readyState==4)
            {
        //alert(httpxml.responseText);
        var myObject = JSON.parse(httpxml.responseText);

        for(j=document.form2.desa.options.length-1;j>=0;j--)
        {
            document.form2.desa.remove(j);
        }

        var desa1=myObject.value.desa1;

        var optn = document.createElement("OPTION");
        optn.text = '--Desa/Kel--';
        optn.value = '';
        document.form2.desa.options.add(optn);
        for (i=0;i<myObject.desa.length;i++)
        {
        var optn = document.createElement("OPTION");
        optn.text = myObject.desa[i];
        optn.value = myObject.desa[i];
        document.form2.desa.options.add(optn);

        if(optn.value==desa1){
        var k= i+1;
        document.form2.desa.options[k].selected=true;
        }
        } 

        //////////////////////////
        for(j=document.form2.dusun.options.length-1;j>=0;j--)
        {
            document.form2.dusun.remove(j);
        }
        var dusun1=myObject.value.dusun1;
        //alert(city1);
        for (i=0;i<myObject.dusun.length;i++)
        {
        var optn = document.createElement("OPTION");
        optn.text = myObject.dusun[i];
        optn.value = myObject.dusun[i];
        document.form2.dusun.options.add(optn);
        if(optn.value==dusun1){
        document.form2.dusun.options[i].selected=true;
        }

        } 


        ///////////////////////////
        document.getElementById("txtHint").style.background='#00f040';
        document.getElementById("txtHint").innerHTML='done';
        //setTimeout("document.getElementById('txtHint').style.display='none'",3000)
        }
        }

        var url="ajax-dd3ck.php";
        var kecamatan=register_form.kecamatan.value;
        if(choice != 's1'){
            var desa=register_form.desa.value;
            var dusun=register_form.dusun.value;
        }else{
            var desa='';
            var dusun='';
        }
        url=url+"?kecamatan="+kecamatan;
        url=url+"&desa="+desa;
        url=url+"&dusun="+dusun;
        url=url+"&id="+Math.random();
        register_form.st.value=desa;
        //alert(url);
        document.getElementById("txtHint2").innerHTML=url;
        }
    </script>
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
            <img src="image\tambah_pengguna.png" alt="">
        </div>
        <div class="text-center mt-2 mb-3 name">
            Pilih Jenis Admin yang Ingin Dibuat
        </div>
        <div class = "d-flex justify-content-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radiokecamatan" value="radiokecamatan">
                <label class="form-check-label" for="radiokecamatan">Kecamatan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radiodesa" value="radiodesa">
                <label class="form-check-label" for="radiodesa">Kelurahan/Desa</label>
            </div>
        </div>
        <form class = "p-1 mt-2" id="tambah1_form" name="tambah1_form" method="post" style="display:none;">
            <input type=hidden name=st value=0>
            <div class="input-group mb-2 mt-3">
                <select class="form-select" aria-label="Default select example" name=kecamatan id='s4'>
                    <option value=''>--Kecamatan--</option> -->
                    <?Php
                        require "config.php";// connection to database 
                        $sql="SELECT * FROM `kecamatan` ORDER BY nama_kecamatan";
                        foreach ($dbo->query($sql) as $row) {
                        echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                        }
                    ?>
                </select>
            </div>
            <input style="margin-top:10px" class="form-control" type="text" name="NIK" id="NIK" placeholder="NIK" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="email" name="email" id="email" placeholder="Email" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
            <div style="text-align:center">
                <button class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel1" value="cancel1" id="cancel1">Batal</button>
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "tambah1" value="tambah1" id="tambah1" >Tambah</button>
            </div>
        </form>
        <form class = "p-1 mt-2" id="tambah2_form" name="tambah2_form" method="post" style="display:none;">
            <input type=hidden name=st value=0>
            <div class="input-group mb-2 mt-3">
                <select class="form-select" aria-label="Default select example" name=kecamatan id='s1'>
                    <option value=''>--Kecamatan--</option> -->
                    <?Php
                        require "config.php";// connection to database 
                        $sql="SELECT * FROM `kecamatan` ORDER BY nama_kecamatan";
                        foreach ($dbo->query($sql) as $row) {
                        echo "<option value=$row[kode_kecamatan]>$row[nama_kecamatan]</option>";
                        }
                    ?>
                </select>
                <select class="form-select" name=desa aria-label="Default select example" id="s2">
                    <option value=''>--Desa/Kel--</option>
                </select>
            </div>
            <input style="margin-top:10px" class="form-control" type="text" name="NIK" id="NIK" placeholder="NIK" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="email" name="email" id="email" placeholder="Email" autocomplete="off">
            <input style="margin-top:10px" class="form-control" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
            <div style="text-align:center">
                <button class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel2" value="cancel2" id="cancel2">Batal</button>
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "tambah2" value="tambah2" id="tambah2" >Tambah</button>
            </div>
        </form>
    </div>
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
    <script>
        $(document).ready(function() {
            $('#radiokecamatan').on('click', function() {
                $("#tambah1_form").show();
                $("#tambah2_form").hide();
            });
            $('#radiodesa').on('click', function() {
                $("#tambah2_form").show();
                $("#tambah1_form").hide();
            });
            $("#s1").change(function(){
                    var selectedCountry = $(this).children("option:selected").val();
                    $.ajax({
                        type: 'GET',
                        url: "datasignup.php?aksi=get_desa&id_kecamatan="+selectedCountry,
                        success: function(data) {
                            dataFull = JSON.parse(data)
                            $("#s2").html("<option value=''>--Desa/Kel--</option>")
                            Object.keys(dataFull).forEach(function(key){
                                $("#s2").append("<option value='"+dataFull[key]['kode_desa']+"'>"+dataFull[key]['nama_desa']+"</option>");
                            })
                        }
                    });
            });
            $("#tambah1").on('click', function(){
                $("#NIK").removeClass("is-invalid")
                $("#nama_lengkap").removeClass("is-invalid")
                $("#email").removeClass("is-invalid")
                $("#password").removeClass("is-invalid")
                $("#s1").removeClass("is-invalid")

                NIK           = $("#NIK").val()
                nama_lengkap  = $("#nama_lengkap").val()
                email         = $("#email").val()
                password      = $("#password").val()
                s1            = $("#s1 option:selected").val()
                errorTotal    = 0

                var form_data = new FormData();

                if(isNaN(parseInt(NIK)) || NIK.length!=16){errorTotal++;$("#NIK").addClass("is-invalid")}
                if(nama_lengkap==""){errorTotal++;$("#nama_lengkap").addClass("is-invalid")}
                if(email==""){errorTotal++;$("#email").addClass("is-invalid")}
                if(password==""){errorTotal++;$("#password").addClass("is-invalid")}
                if(s1==""){errorTotal++;$("#s1").addClass("is-invalid")}
                if(errorTotal>0){return}

                form_data.append("action","signup_user");
                form_data.append("NIK",NIK);
                form_data.append("nama_lengkap",nama_lengkap);
                form_data.append("email",email);
                form_data.append("password",password);
                form_data.append("kecamatan",s1);
                
                alert("Mohon menunggu validasi 1x24 jam. Apabila belum divalidasi, harap menghubungi kepala desa setempat")
                $.ajax({
                    url: 'datasignup.php',
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'POST',
                    success: function(response){
                        alert("Mohon menunggu validasi 1x24 jam. Apabila belum divalidasi, harap menghubungi kepala desa setempat")
                    },
                    error: function(error){
                        console.log(error)
                    }
                });
            });
        });
    </script>
    <div id="txtHint2"></div>

</body>
</html>