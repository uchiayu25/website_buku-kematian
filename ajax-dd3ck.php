<?Php
    require "config.php"; // connection details

    error_reporting(0);// With this no error reporting will be there
    //////////
    /////////////////////////////////////////////////////////////////////////////
    $kecamatan=$_GET['kecamatan'];// 
    //$country='IND'; // To check you can use this
    $desa1=$_GET['desa'];
    $dusun1=$_GET['dusun'];
    //$state1="Andhra Pradesh";
    ///////////// Validate the inputs ////////////
    // Checking country variable ///
    if((strlen($kecamatan)) > 0 and (!ctype_alpha($kecamatan))){ 
        echo "Data Error";
    exit;
    }
    // Checking state variable (with space ) ///

    if ((strlen($desa1)) > 0 and ctype_alpha(str_replace(' ', '', $desa1)) === false) {
        echo "Data Error";
    exit;
    }

    /////////// end of input validation //////

    if(strlen($kecamatan) > 0){
        $q_kecamatan="SELECT DISTINCT nama_desa FROM (dusun ds LEFT JOIN desa de ON ds.kode_desa = de.kode_desa) LEFT JOIN kecamatan ke ON de.kode_kecamatan = ke.kode_kecamatan WHERE ke.nama_kecamatan = '$kecamatan' ORDER BY nama_desa;";
    }else{
        $q_kecamatan="SELECT DISTINCT nama_desa FROM (dusun ds LEFT JOIN desa de ON ds.kode_desa = de.kode_desa) LEFT JOIN kecamatan ke ON de.kode_kecamatan = ke.kode_kecamatan ORDER BY nama_desa;";
    }
    //echo $q_country;
    $sth = $dbo->prepare($q_kecamatan);
    $sth->execute();
    $desa = $sth->fetchAll(PDO::FETCH_COLUMN);

    $q_desa="SELECT DISTINCT nama_dusun FROM (dusun ds LEFT JOIN desa de ON ds.kode_desa = de.kode_desa) LEFT JOIN kecamatan ke ON de.kode_kecamatan = ke.kode_kecamatan WHERE ";
    if(strlen($desa) > 0){
        $q_desa= $q_desa . " ke.nama_kecamatan = '$kecamatan' order by ds.nama_dusun ";
    
    if(strlen($desa1) > 0)
        {$q_desa= $q_desa . "ke.nama_kecamatan = '$kecamatan' and  de.nama_desa='$desa1' order by ds.nama_dusun";}
    $sth = $dbo->prepare($q_desa);
    $sth->execute();
    $dusun = $sth->fetchAll(PDO::FETCH_COLUMN);

    /*$main = array('de.nama_desa'=>$desa,'ds.nama_dusun'=>$dusun,'value'=>array("nama_desa"=>"$desa1","nama_dusun"=>"$dusun1"));
    echo json_encode($main);*/

////////////End of script /////////////////////////////////////////////////////////////////////////////////
?>