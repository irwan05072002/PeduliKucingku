<?php

  include"../configuration/connect_db.php";

if(isset($_SESSION["calculate_persentase_of_P1"]) AND
    isset($_SESSION["calculate_persentase_of_P2"]) AND
        isset($_SESSION["calculate_persentase_of_P3"]) AND
            isset($_SESSION["calculate_persentase_of_P4"]) AND
                isset($_SESSION["calculate_persentase_of_P5"]) AND
                    isset($_SESSION["calculate_persentase_of_P6"]) AND
                        isset($_SESSION["calculate_persentase_of_P7"]))
{
    $total_P1   = $_SESSION["calculate_persentase_of_P1"];
    $total_P2   = $_SESSION["calculate_persentase_of_P2"];
    $total_P3   = $_SESSION["calculate_persentase_of_P3"];
    $total_P4   = $_SESSION["calculate_persentase_of_P4"];
    $total_P5   = $_SESSION["calculate_persentase_of_P5"];
    $total_P6   = $_SESSION["calculate_persentase_of_P6"];
    $total_P7   = $_SESSION["calculate_persentase_of_P7"];
}



            // GET INFORMATION USERS WHEN LOGIN
            $username_user      = $_SESSION["username_user"];
            $query_detil_user   = "SELECT * FROM users_account 
                                        WHERE 
                                    username_user = '$username_user'
                                ";
            $result_detil_user             = mysqli_query($check_connection, $query_detil_user);
            $data_detil_user               = mysqli_fetch_array($result_detil_user);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
</head>
<body>
    <div class="container-hasil-diagno">
        <div class="box-primary">
            <h1>HASIL DIAGNOSA</h1>
        </div>
        <!-- ======================== GEJALA YANG DI MILIKI ======================== -->
        <!-- GEJALA YANG DI PILIH -->
        <div class="box-primary top ">
            <div class="title-primary">
                <p>GEJALA YANG DI MILIKI</p>
            </div>
            <div class="box-g">
                <?php    
                    // jika gejala 1
                    if(isset($_SESSION["P1"])){
                        $P1 = $_SESSION["P1"];
                        echo $P1;
                    }
                ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 2
                    if(isset($_SESSION["P2"])){
                        $P2 = $_SESSION["P2"];
                        echo $P2;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 3
                    if(isset($_SESSION["P3"])){
                        $P3 = $_SESSION["P3"];
                        echo $P3;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 4
                    if(isset($_SESSION["P4"])){
                        $P4 = $_SESSION["P4"];
                        echo $P4;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 5
                    if(isset($_SESSION["P5"])){
                        $P5 = $_SESSION["P5"];
                        echo $P5;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 6
                    if(isset($_SESSION["P6"])){
                        $P6 = $_SESSION["P6"];
                        echo $P6;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 7
                    if(isset($_SESSION["P7"])){
                        $P7 = $_SESSION["P7"];
                        echo $P7;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 7
                    if(isset($_SESSION["P7"])){
                        $P7 = $_SESSION["P7"];
                        echo $P7;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 8
                    if(isset($_SESSION["P8"])){
                        $P8 = $_SESSION["P8"];
                        echo $P8;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 9
                    if(isset($_SESSION["P9"])){
                        $P9 = $_SESSION["P9"];
                        echo $P9;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 10
                    if(isset($_SESSION["P10"])){
                        $P10 = $_SESSION["P10"];
                        echo $P10;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 11
                    if(isset($_SESSION["P11"])){
                        $P11 = $_SESSION["P11"];
                        echo $P11;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 12
                    if(isset($_SESSION["P12"])){
                        $P12 = $_SESSION["P12"];
                        echo $P12;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 13
                    if(isset($_SESSION["P13"])){
                        $P13 = $_SESSION["P13"];
                        echo $P13;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 14
                    if(isset($_SESSION["P14"])){
                        $P14 = $_SESSION["P14"];
                        echo $P14;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 15
                    if(isset($_SESSION["P15"])){
                        $P15 = $_SESSION["P15"];
                        echo $P15;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 16
                    if(isset($_SESSION["P16"])){
                        $P16 = $_SESSION["P16"];
                        echo $P16;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 17
                    if(isset($_SESSION["P17"])){
                        $P17 = $_SESSION["P17"];
                        echo $P17;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 18
                    if(isset($_SESSION["P18"])){
                        $P18 = $_SESSION["P18"];
                        echo $P18;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 19
                    if(isset($_SESSION["P19"])){
                        $P19 = $_SESSION["P19"];
                        echo $P19;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 20
                    if(isset($_SESSION["P20"])){
                        $P20 = $_SESSION["P20"];
                        echo $P20;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 21
                    if(isset($_SESSION["P21"])){
                        $P21 = $_SESSION["P21"];
                        echo $P21;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 22
                    if(isset($_SESSION["P22"])){
                        $P22 = $_SESSION["P22"];
                        echo $P22;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 23
                    if(isset($_SESSION["P23"])){
                        $P23 = $_SESSION["P23"];
                        echo $P23;
                    }
                    ?>
            </div>
            <div class="box-g">
                <?php
                    // jika gejala 24
                    if(isset($_SESSION["P24"])){
                        $P24 = $_SESSION["P24"];
                        echo $P24;
                    }
                    ?>
            </div>
        </div>
        <!-- =================== PERSENTASE PENYAKIT ======================= -->
        <!-- KETERANGAN PERSENTASE PENYAKIT -->
        <div class="box-primary top persentase">
            <div class="title-primary">
                <p>PERSENTASE PENYAKIT</p>
            </div>
            <table border="1" width="100%" cellpadding=""0 cellspacing="0">
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Rabies</p>
                    </td>
                    <td>
                        <?php echo " $total_P1 % <br>"?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Infeksi Saluran Pernapasan</p>
                    </td>
                    <td>
                        <?php echo " $total_P2 % <br>"?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Panleukopenia Virus</p>
                    </td>
                    <td>
                        <?php echo " $total_P3 %"?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Eendoparasit</p>
                    </td>
                    <td>
                        <?php echo " $total_P4 %"?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Feline Chlamydia</p>
                    </td>
                    <td>
                        <?php echo " $total_P5 %" ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Feline Urinary Sindrome</p>
                    </td>
                    <td>
                        <?php echo " $total_P6 % <br>"?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="vonis_p">Penyakit Feline Calici Virus</p>
                    </td>
                    <td>
                        <?php echo " $total_P7 % <br>"?>
                    </td>
                </tr>
            </table>
        </div>
        <!-- ==================== INDIKASI MENGIDAP PENYAKIT =================== -->
        <div class="box-primary top">
            <div class="title-primary">
                <p>INDIKASI MENGIDAP PENYAKIT</p>
            </div>
            <br>
            <!-- RULE PENYAKIT DOMINAN -->
            <?php
                // penyakit rabies
                if($total_P1 == 100){

                    echo"<p>RABIES</p>";
                    $kode_penyakit_1 = "P1";

                }else if($total_P1 >= 1 && $total_P1 <= 99){
                        
                    $kode_penyakit_1 = "FALSE";
                        
                }else if($total_P1 < 1){

                    $kode_penyakit_1 = "NULL";

                }
            
                // penyakit infeksi saluran pernapasan
                if($total_P2 == 100){

                    echo"<pINFEKSI SALURANPERNAPASAN</p>";
                    $kode_penyakit_2 = "P2";
            
                }else if($total_P2 >= 1 && $total_P2 <= 99){
                        
                        $kode_penyakit_2 = "FALSE";
                        
                }else if($total_P2 < 1){

                    $kode_penyakit_2 = "NULL";

                }
                
                // penyakit panleukopenia virus
                if($total_P3 == 100){

                    echo"<p>PANLEUKOPENIA VIRUS</p>";
                    $kode_penyakit_3 = "P3";

                }else if($total_P3 >= 1 && $total_P3 <= 99){
                        
                        $kode_penyakit_3 = "FALSE";
                        
                }else if($total_P3 < 1){

                    $kode_penyakit_3 = "NULL";

                }
                
                // penyakit endoparasit
                if($total_P4 == 100){

                    echo"<pENDOPARASIT</p>";
                    $kode_penyakit_4 = "P4";

                }else if($total_P4 >= 1 && $total_P4 <= 99){
                        
                        $kode_penyakit_4 = "FALSE";
                        
                }else if($total_P4 < 1){

                    $kode_penyakit_4 = "NULL";

                }

                // penyakit feline chlamydia
                if($total_P5 == 100){

                    echo"<pFELINE CHLAMYDIA</p>";
                    $kode_penyakit_5 = "P5";

                }else if($total_P5 >= 1 && $total_P5 <= 99){
                        
                        $kode_penyakit_5 = "FALSE";
                        
                }else if($total_P5 < 1){

                    $kode_penyakit_5 = "NULL";

                }
                
                // penyakit feline urinary sindrome
                if($total_P6 == 100){

                    echo"<pFELINE URINARY SINDROME</p>";
                    $kode_penyakit_6 = "P6";

                }else if($total_P6 >= 1 && $total_P6 <= 99){
                        
                        $kode_penyakit_6 = "FALSE";
                        
                }else if($total_P6 < 1){

                    $kode_penyakit_6 = "NULL";

                }
                
                // penyakit feline calicivirus
                if($total_P7 == 100){

                    echo"<pFELINE CALICI VIRUS</p>";
                    $kode_penyakit_7 = "P7";

                }else if($total_P7 >= 1 && $total_P7 <= 99){
                        
                        $kode_penyakit_7 = "FALSE";
                        
                }else if($total_P7 < 1){

                    $kode_penyakit_7 = "NULL";
                }
            ?>
        </div>
            
        <div class="box-print">
           <a href="dashboard.php?next=cetak" id="btncetak" target="_blank"><button></button></a>
        </div>

    </div>

<!-- sweet alert library-->
<script src="../js/sweetalert/sweetalert2.all.min.js"></script>


<!-- CREATE DATA TO TABLE HASILDIAGNOSA_TB -->
<?php

    // array data hari
    $list_day = [
        "Minggu",
        "Senin",
        "Selasa", 
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu"
    ];



    // ambil hari sekarang
    $hari = date('l');

    // logic untuk mengubah hari ke indonesia
    if($hari == "Sunday")
    {
        $new_hari = $list_day[0];
    }
    else if($hari == "Monday")
    {
        $new_hari = $list_day[1];
    }
    else if($hari == "Tuesday")
    {
        $new_hari = $list_day[2];
    }
    else if($hari == "Wednesday")
    {
        $new_hari = $list_day[3];
    }
    else if($hari == "Thursday")
    {
        $new_hari = $list_day[4];
    }
    else if($hari == "Friday"){
        $new_hari = $list_day[5];
    }
    else if($hari == "Saturday")
    {
        $new_hari = $list_day[6];
    }else{
        return false;
    }

    echo "Hari " .$new_hari;

    die();

    // jika probabiitas hasil diagnosa ada yang 100%
    if(
        $kode_penyakit_1 == "P1" || $kode_penyakit_2 == "P2" ||
        $kode_penyakit_3 == "P3" || $kode_penyakit_4 == "P4" ||
        $kode_penyakit_5 == "P5" || $kode_penyakit_6 == "P6" ||
        $kode_penyakit_7 == "P7"
    )
    {
        // ambil id user sebagai patokan simpan data
        $id_user = $data_detil_user["id_user"];

        // JIKA P1 TRUE
        if($kode_penyakit_1 == "P1")
        {
            // query create hasil diagnosa
            $queryInserthasil = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                ('', '$id_user', '$kode_penyakit_1', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }

        // JIKA P2 TRUE
        else if($kode_penyakit_2 == "P2")
        {
            // query create hasil diagnosa
            $queryInserthasil   = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                    ('','$id_user','$kode_penyakit_2', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }

        // JIKA P3 TRUE
        else if($kode_penyakit_3 == "P3")
        {
            // query create hasil diagnosa
            $queryInserthasil   = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                    ('','$id_user','$kode_penyakit_3', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }

        // JIKA P4 TRUE
        else if($kode_penyakit_4 == "P4")
        {
            // query create hasil diagnosa
            $queryInserthasil   = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                    ('','$id_user','$kode_penyakit_4', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }

        // JIKA P5 TRUE
        else if($kode_penyakit_5 == "P5")
        {
            // query create hasil diagnosa
            $queryInserthasil   = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                    ('','$id_user','$kode_penyakit_5', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }

        // JIKA P6 TRUE
        else if($kode_penyakit_6 == "P6")
        {
            // query create hasil diagnosa
            $queryInserthasil   = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                    ('','$id_user','$kode_penyakit_6', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }

        // JIKA P7 TRUE
        else if($kode_penyakit_7 == "P7")
        {
            // query create hasil diagnosa
            $queryInserthasil   = "INSERT INTO hasildiagnosa_tb 
                                    VALUES
                                    ('','$id_user','$kode_penyakit_7', '')
                                ";
            $result_insertHasil = mysqli_query($check_connection, $queryInserthasil);
        }
            // cek keberhasilan tambah data
            if($result_insertHasil)
            {
                echo"      
                <script>
                    swal
                        .fire({
                            title: 'Data Ditambahkan',
                            text: 'Penyakit dominan terdeteksi',
                            icon: 'success',
                            showConfirmButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'baik',
                            confirmButtonColor: 'green',
                        });
                    </script>
                ";
            }else{
                echo"      
                <script>
                    swal
                        .fire({
                            title: 'tambah data gagal',
                            text: 'eror pada baris kode',
                            icon: 'error',
                            showConfirmButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'baik',
                            confirmButtonColor: 'red',
                        });
                    </script>
                ";
            }
    }  
    // jika probabiitas hasil diagnosa dibawah 100%
    else if(
        $kode_penyakit_1 == "FALSE"||
        $kode_penyakit_2 == "FALSE" ||
        $kode_penyakit_3 == "FALSE" ||
        $kode_penyakit_4 == "FALSE" ||
        $kode_penyakit_5 == "FALSE" ||
        $kode_penyakit_6 == "FALSE" ||
        $kode_penyakit_7 == "FALSE"
    )
    {
            echo"      
                <script>
                    swal
                        .fire({
                            title: 'Tidak ada penyakit',
                            text: 'Penyakit dominan tidak terdeteksi',
                            icon: 'warning',
                            showConfirmButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'baik',
                            confirmButtonColor: 'yellow',
                        });
                    </script>
                ";

    }
            
    // jika seluruh probabiitas hasil diagnosa dibawah 0%
    else if(
        $kode_penyakit_1 == "NULL"&&
        $kode_penyakit_2 == "NULL" &&
        $kode_penyakit_3 == "NULL" &&
        $kode_penyakit_4 == "NULL" &&
        $kode_penyakit_5 == "NULL" &&
        $kode_penyakit_6 == "NULL" &&
        $kode_penyakit_7 == "NULL"
    )
    {
        echo"      
                <script>
                    swal
                        .fire({
                            title: 'Data kosong',
                            text: 'Anda tidak memilih satupun gejala yang  di sediakan',
                            icon: 'error',
                            showConfirmButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'baik',
                            confirmButtonColor: 'red',
                        });
                    </script>
                ";
    }
?>
</body>
</html>