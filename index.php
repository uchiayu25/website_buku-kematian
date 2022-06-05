<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan Buku Pokok Pemakaman Disdukcapil Badung</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="style.css">
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
        //httpxml.onreadydesachange=desaChanged;
        //httpxml.open("GET",url,true);
        //httpxml.send(null);
        //document.getElementById("txtHint").innerHTML="Mohon Tunggu Sebentar....";
        //document.getElementById("txtHint").style.background='#f1f1f1';
        }
    </script>
    <style>
        #opsionalDusun{
            display:none;
        }
    </style>
</head>
<body>
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
    
    <div class="wrapper">
        <div class="logo">
            <img src="image\Disdukcapil Kabupaten Badung.png" alt="">
        </div>
        <div class="text-center mt-2 name">
           Pelaporan Buku Pokok Pemakaman
        </div>
        <form class = "p-1 mt-3" id="login_form" name="login_form" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div style="text-align:center">
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "login" value="Login" id="login">Login</button>
            </div>
            <div class="text-center fs-6 mt-3">
                <a href="#">Lupa password?</a> or <a id="buat_akun" href="#">Buat Akun</a>
            </div>
        </form>
       
        <form class="p-3 mt-3" id="register_form" name=register_form method="post" style="display:none;">
        <input type=hidden name=st value=0>
            <div class="input-group mb-3">
                <select class="form-select form-field" aria-label="Default select example" name=kecamatan id='s1'>
                    <option value=''>--Kecamatan--</option>
                    <!-- <option value=""disabled selected>--Kecamatan--</option> -->
                    <!-- <option <?php //if(!empty($cari)){ echo $cari == 'Abiansemal' ? 'selected':''; } ?>value="abiansemal">Abiansemal</option>
                    <option <?php //if(!empty($cari)){ echo $cari == 'Kuta' ? 'selected':''; } ?>value="kuta">Kuta</option>
                    <option <?php //if(!empty($cari)){ echo $cari == 'Kuta Utara' ? 'selected':''; } ?>value="kutautara">Kuta Utara</option>
                    <option <?php //if(!empty($cari)){ echo $cari == 'Kuta Selatan' ? 'selected':''; } ?>value="kutaselatan">Kuta Selatan</option>
                    <option <?php //if(!empty($cari)){ echo $cari == 'Mengwi' ? 'selected':''; } ?>value="mengwi">Mengwi</option>
                    <option <?php //if(!empty($cari)){ echo $cari == 'Petang' ? 'selected':''; } ?>value="petang">Petang</option>
                </select> -->
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
                    <!-- <?php
                        //$sql=mysql_query("SELECT desa.nama_desa FROM desa INNER JOIN kecamatan ON desa.kode_kecamatan = kecamatan.kode_kecamatan WHERE kecamatan.nama_kecamatan = "Kuta" order by desa.nama_desa;");
                    ?>
                </select> -->
                <select class="form-select form-field" name=dusun aria-label="Default select example" id="s3">
                    <option value='title'>--Dusun--</option>
                </select>
            </div>
            <div class="form-field align-items-center" id="opsionalDusun">
                <span class="far fa-user"></span>
                <input type="text" name="nama_dusun_baru" id="nama_dusun_baru" placeholder="Nama Dusun">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="NIK" id="NIK" placeholder="NIK">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="nama_lengkap">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div style="text-align:center">
                <button class="btn btn-danger rounded-pill mt-3" style="width:150px" name= "cancel" value="cancel" id="cancel">Cancel</button>
                <button class="btn btn-primary rounded-pill mt-3"  style="width:150px" name= "registrasi" value="registrasi" id="registrasi" >Registrasi</button>
            </div>
            <div class="text-center fs-6 mt-3">
                <a id="balik_login" href = "#">Sudah Punya Akun? Silahkan Login! </a>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#cancel').on('click', function() {
                $("#login_form").show();
                $("#register_form").hide();
            });
            $('#balik_login').on('click', function() {
                $("#login_form").show();
                $("#register_form").hide();
            });
            $('#buat_akun').on('click', function() {
                $("#register_form").show();
                $("#login_form").hide();
            });
            $('#registrasi').on('click', function() {
                var NIK      = $('#NIK').val();
                var name     = $('#nama_lengkap').val();
                var password = $('#password').val();
                errorVal     = 0

                if(NIK == ""){$('#NIK').attr({'class':'is-false'})}
                alert("HAI")

                
                // if(name!="" && NIK!="" && password!="" ){
                //     $.ajax({
                //     url: "save.php",
                //     type: "POST",
                //     data: {
                //         type: 1,
                //         name: name,
                //         email: email,
                //         phone: phone,
                //         city: city,
                //         password: password						
                //     },
                //     cache: false,
                //     success: function(dataResult){
                //         var dataResult = JSON.parse(dataResult);
                //         if(dataResult.statusCode==200){
                //             $("#butsave").removeAttr("disabled");
                //             $('#register_form').find('input:text').val('');
                //             $("#success").show();
                //             $('#success').html('Registration successful !'); 						
                //         }
                //         else if(dataResult.statusCode==201){
                //             $("#error").show();
                //             $('#error').html('Email ID already exists !');
                //         }
                //     }        
                // });
                // }
                // else{
                //     alert('Please fill all the field !');
                // }
            });
            $('#butlogin').on('click', function() {
                var email = $('#email_log').val();
                var password = $('#password_log').val();
                if(email!="" && password!="" ){
                    $.ajax({
                        url: "save.php",
                        type: "POST",
                        data: {
                            type:2,
                            email: email,
                            password: password						
                        },
                        cache: false,
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                location.href = "welcome.php";						
                            }
                            else if(dataResult.statusCode==201){
                                $("#error").show();
                                $('#error').html('Invalid EmailId or Password !');
                            }
                            
                        }
                    });
                }
                else{
                    alert('Please fill all the field !');
                }
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

            $("#s2").change(function(){
                var selectedCountry = $(this).children("option:selected").val();
                $.ajax({
                    type: 'GET',
                    url: "datasignup.php?aksi=get_dusun&id_desa="+selectedCountry,
                    success: function(data) {
                        dataFull = JSON.parse(data)
                        $("#s3").html("<option value=''>--Dusun--</option>")
                        Object.keys(dataFull).forEach(function(key){
                            $("#s3").append("<option value='"+dataFull[key]['kode_dusun']+"'>"+dataFull[key]['nama_dusun']+"</option>");
                        })
                        $("#s3").append("<option value='NewId'>Lokasi Lainnya</option>")
                    }
                });
            });

            $("#s3").change(function(){
                var selectedCountry = $(this).children("option:selected").val();
                if(selectedCountry == "NewId"){
                    $("#opsionalDusun").css({'display':'flex'})
                }else{
                    $("#opsionalDusun").css({'display':'none'})
                }
            });
            
        });
    </script>
    <div id="txtHint2"></div>
</body>
</html>