<?php
    include "config.php";

    if(isset($_GET['aksi'])){
        if($_GET['aksi']=='get_desa'){Generate_Desa();}
        else if($_GET['aksi']=='get_dusun'){Generate_Dusun();}
        
    }

    function Generate_Desa(){
        global $conn;
        $id = $_GET['id_kecamatan'];
        $sql = "SELECT * FROM `desa` WHERE kode_kecamatan = $id;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function Generate_Dusun(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT * FROM `dusun` WHERE kode_desa = $id;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }
?>