<?php

    include"../configuration/connect_db.php";
    
    // session declaration
    session_start();
    
    // check session
    if(!isset($_SESSION["LOGIN"]) or !isset($_SESSION["username_user"]) or !isset($_SESSION["nama_user"])){
        
        header("location: ../logout/logout.php");
        die();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css disini aja deh -->
    <style>
*{
    text-align:center;
}
body{
    margin-left:50px;
    margin-right:50px;
}

.judul1{
    margin-top:60px;
font-size:20px;
}
 .judul2{
font-size:20px;

}
 
.ket_user{
    text-align:left;
    font-size:12px;
}
 p{
    text-align:left;
 }
 .ket_per{
    text-align:justify;
 }
 .ket_al{
    text-align:center;
 }
 .tbket_user table tr td:nth-child(1){
    width:100px;
    text-align:left;
 }
 .tbket_user table tr td:nth-child(2){
    width:300px;
    text-align:left;
    font-size:12px;

 }
 .tbket_user table{
    border:none;
 }
 .tbket_user table tr td{
    padding:0px 0px 0px 0px;
    /* border:none; */
 }

 .tbket_user p{
    font-size:11px;
    font-family:arial;
 }

.table_ketPenyakit table{
    border:none;
}
.table_ketPenyakit table tr:nth-child(1) th {
    background-color:lightblue;
    padding:10px;
    font-family:arial;
}
.table_ketPenyakit table tr:nth-child(3) th {
    background-color:red;
    padding:10px;
    font-family:arial;

}
.table_ketPenyakit table tr:nth-child(5) th {
    background-color:yellow;
    padding:10px;
    font-family:arial;

}

.table_ketPenyakit table tr:nth-child(2) td,
.table_ketPenyakit table tr:nth-child(4) td,
.table_ketPenyakit table tr:nth-child(6) td{
    background-color: rgb(253, 253, 253);
    padding:20px 50px 20px 50px;
    font-size:15px;
    text-align:center;
}

 </style>

    <title>SURAT HASIL DIAGNOSA PEDULI KUCINGKU</title>
</head>
<body>

    <h1 class="judul1">SURAT KETERANGAN HASIL DIAGNOSA</h1>
    <h3 class="judul2">APLIKASI PEDULI KUCINGKU</h3>
    <p class="ket_al">Alamat web aplikasi : pedulikucingku.epizy.com</p>

    <!-- baris pemisah -->
    <hr>

                    <?php
                    
                        $user_name  = $_SESSION["username_user"];
                        $result_hi  = mysqli_query($check_connection, "SELECT * FROM users_account WHERE username_user = '$user_name'");
                        $da_user    = mysqli_fetch_array($result_hi);
                    ?>

    <!-- keterangan pengguna -->
    <div class="tbket_user">
        <table border="0" cellspacing="0" cellpadding="20">
            <tr>
                <td>
                    <p >Username</p>
                </td>
              <td>
                : <?php  echo $da_user["username_user"];?>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Nama Pemilik</p>
                </td>
                <td>
                    : <?php  echo $da_user["nama_user"];?> 
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Alamat</p>
                </td>
                 <td>
                    : <?php  echo $da_user["alamat_user"];?> 
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Kabupaten</p>
                </td>
                 <td>
                    : <?php  echo $da_user["kab_user"];?> 
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Kecamatan</p>
                </td>
                 <td>
                    : <?php  echo $da_user["kec_user"];?> 
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Jenis Kucing</p>
                </td>
                 <td>
                    : <?php  echo $da_user["jenis_kucing"];?> 
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Usia Kucing</p>
                </td>
                 <td>
                    : <?php  echo $da_user["usia_kucing"];?> 
                </td>
            </tr>
            <tr>
                <td>
                    <p class="ket_user">Waktu</p>
                </td>
                 <td>
                    : <!--WAKTU DIAGNOSA  -->
                </td>
            </tr>
        </table>
    </div>

    <br>
    <p class="ket_user">Berikut adalah Hasil Diagnosa pada kucing anda</p>

    <br>
<div class="table_ketPenyakit">
    <table border="1" width="100%">
        <!-- baris pertma -->
        <tr>
            <th>GEJALA YANG DI MILIKI</th>
        </tr>

        <!-- baris kedua -->
        <Tr>
            <td>
                    <p>
                        <?php
                            if(isset($_SESSION["P1"])){
                            $P1 = $_SESSION["P1"];
                            echo $P1;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P2"])){
                            $P2 = $_SESSION["P2"];
                            echo $P2;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P3"])){
                            $P3 = $_SESSION["P3"];
                            echo $P3;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P4"])){
                            $P4 = $_SESSION["P4"];
                            echo $P4;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P5"])){
                            $P5 = $_SESSION["P5"];
                            echo $P5;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P6"])){
                            $P6 = $_SESSION["P6"];
                            echo $P6;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P7"])){
                            $P7 = $_SESSION["P7"];
                            echo $P7;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P8"])){
                            $P8 = $_SESSION["P8"];
                            echo $P8;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P9"])){
                            $P9 = $_SESSION["P9"];
                            echo $P9;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P10"])){
                            $P10 = $_SESSION["P10"];
                            echo $P10;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P11"])){
                            $P11 = $_SESSION["P11"];
                            echo $P11;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P12"])){
                            $P12 = $_SESSION["P12"];
                            echo $P12;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P13"])){
                            $P13 = $_SESSION["P13"];
                            echo $P13;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P14"])){
                            $P14 = $_SESSION["P14"];
                            echo $P14;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P15"])){
                            $P15 = $_SESSION["P15"];
                            echo $P15;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P16"])){
                            $P16 = $_SESSION["P16"];
                            echo $P16;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P17"])){
                            $P17 = $_SESSION["P17"];
                            echo $P17;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P18"])){
                            $P18 = $_SESSION["P18"];
                            echo $P18;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P19"])){
                            $P19 = $_SESSION["P19"];
                            echo $P19;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P20"])){
                            $P20 = $_SESSION["P20"];
                            echo $P20;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P21"])){
                            $P21 = $_SESSION["P21"];
                            echo $P21;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P22"])){
                            $P22 = $_SESSION["P22"];
                            echo $P22;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P23"])){
                            $P23 = $_SESSION["P23"];
                            echo $P23;
                            }
                        ?>
                    </p> 
                    <p>
                        <?php
                            if(isset($_SESSION["P24"])){
                            $P24 = $_SESSION["P24"];
                            echo $P24;
                            }
                        ?>
                    </p> 
            </td>
        </Tr>

        <!-- baris ketiga -->
        <tr>
            <th>HASIL DIAGNOSA</th>
        </tr>
        
        <!-- baris keempat -->
        <Tr>
            <td>
                <?php
                
                    if($_SESSION["calculate_persentase_of_P1"] > 70){
                        echo"<p>RABIES</p>";
                    }
                    if($_SESSION["calculate_persentase_of_P2"] > 70){
                        echo"<p>INFEKSI SALURANPERNAPASAN</p>";
                    }
                    if($_SESSION["calculate_persentase_of_P3"] > 70){
                        echo"<p>PANLEUKOPENIA VIRUS</p>";
                    }
                    if($_SESSION["calculate_persentase_of_P4"] > 70){
                        echo"<p>ENDOPARASIT</p>";
                    }
                    if($_SESSION["calculate_persentase_of_P5"] > 70){
                        echo"<p>FELINE CHLAMYDIA</p>";
                    }
                    if($_SESSION["calculate_persentase_of_P6"] > 70){
                        echo"<p>FELINE URINARY SINDROME</p>";
                    }
                    if($_SESSION["calculate_persentase_of_P7"] > 70){
                        echo"<p>FELINE CALICI VIRUS</p>";
                    }
                ?>
            </td>
        </Tr>

        <!-- baris kelima -->
        <tr>
            <th>INDIKASI MENGIDAP PADA PENYAKIT YANG LAIN</th>
        </tr>

        <!-- baris keenam -->
        <Tr>
            
            <td>
                <p>
                    <?php
                    $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P1'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit'];
                    echo $_SESSION['calculate_persentase_of_P1'];
                    ?>
                </p>
                <p>
                    <?php
                          $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P2'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit']; 
                    echo $_SESSION['calculate_persentase_of_P2']
                    ?>
                </p>
                <p>
                    <?php
                          $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P3'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit']; 
                    echo $_SESSION['calculate_persentase_of_P3']
                    ?>
                </p>
                <p>
                    <?php
                          $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P4'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit']; 
                    echo $_SESSION['calculate_persentase_of_P4']
                    ?>
                </p>
                <p>
                    <?php
                          $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P5'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit']; 
                    echo $_SESSION['calculate_persentase_of_P5']
                    ?>
                </p>
                <p>
                    <?php
                          $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P6'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit']; 
                    echo $_SESSION['calculate_persentase_of_P6']
                    ?>
                </p>
                <p>
                    <?php
                          $querycekPenyakit = "SELECT * FROM penyakit_tb WHERE kode_penyakit = 'P7'";
                    $result = mysqli_query($check_connection, $querycekPenyakit);
                    $data_penyakit  = mysqli_fetch_array($result);
                    
                    echo $data_penyakit['nama_penyakit']; 
                    echo $_SESSION['calculate_persentase_of_P7']
                    ?>
                </p>
            </td>
        </Tr>
    </table>
    </div>

    <br>
    <h5 class="ket_user">PENANGANAN DAN PERAWATAN</h5>
    <p class="ket_per">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse voluptas debitis odio iure, facere, inventore accusantium deserunt error commodi dolore modi alias laudantium voluptate ut suscipit enim magni, odit cumque.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, illum numquam magnam id repellat sed maxime reprehenderit, pariatur eius, assumenda omnis consequatur ducimus nisi amet culpa. Accusamus omnis officia dicta!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, natus laudantium sapiente obcaecati quas, assumenda incidunt totam maxime at dignissimos odit aut molestiae, aperiam saepe rerum autem ratione voluptas doloribus.
    </p>
    <br>
    <p>
        Terima kasih telah mengunakan Aplikasi Peduli Kucingku
    </p>
    <p>
        Semoga kucing anda baik-baik saja
    </p>
    <script>
        setTimeout(() => {
            window.print();
        }, 500);

        // setTimeout(() => {
        //     window.close();
            
        // }, 1000);
    </script>

</body>
</html>