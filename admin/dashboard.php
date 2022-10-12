<?php

// session declaration
session_start();

// check session
if(!isset($_SESSION["LOGIN"]) or !isset($_SESSION["username_user"]) or !isset($_SESSION["nama_user"])){
        
    header("location: ../logout/logout.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
""
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->
    <link rel="shortcut icon" href="../asset/img/favicon.ico" type="image/x-icon">

    <!-- eksternal css -->
    <link rel="stylesheet" href="style/admin_style.css">
    <title>Dashboard PeduliKucingku</title>
</head>

<body>

    <div class="container">

    <!-- loading animated -->
    <div class="box-loading" id="box-loading">
        <div class="box-loading-child">
          <img id="img-loading"src="../asset/img/loading.gif" alt="loading brooo">
        </div>
    </div>

        <!-- header-->
        <div class="box-home" id="box-home-slide">
            <div class="title-box-home">
                <h1>PeduliKucingku</h1>
            </div>
            <div class="welcome-box-home">
                <h2>Selamat Datang, <?php echo $_SESSION["nama_user"];?></h2>
            </div>
            <div class="humberger-menu" id="btn_nav">
                <div class="line" id="line1"></div>
                <div class="line"></div>
                <div class="line" id="line2"></div>
            </div>
        </div>

        <div class="navigation">
            <div class="menu">
                <a href="dashboard.php">Home</a>
            </div>
            <div class="menu">
                <a href="?next=list-penyakit">Daftar Penyakit</a>
            </div>
            <div class="menu">
                <a href="?next=diagnosa">Mulai Diagnosa</a>
            </div>
            <div class="menu">
                <a href="?next=riwayatdiagno">Riwayat Diagnosa</a>
            </div>
            <div class="menu">
                <a href="../logout/logout.php">logout</a>
            </div>
        </div>

        <div class="content" id="content">
            <?Php
                // jika tidak ada url next tampilkan dashboard
                if(!isset($_GET["next"])){

                    include"homepage_desc.php";

                // jika ada url next redirect ke masing-
                // masing halaman
                }else{

                    if($_GET["next"] == "list-penyakit"){
                        
                        include"homepage_list-penyakit.php";
                    
                    }else if($_GET["next"] == "diagnosa"){
                    
                        include"homepage_diagno.php";
                    
                    }else if($_GET["next"] == "finish"){

                        include"homepage_hasil_diagnosa.php";

                    }else if($_GET["next"] == "cetak"){
                        
                        header("location:cetak.php");
                    
                    }else if($_GET["next"] == "riwayatdiagno"){

                        include"homepage_riwayatdiagno.php";

                    }
                }
            ?>
        </div>


    </div>


    <!-- navigatin  -->
    <script src="../js/navbarSett.js"></script>
    <script src="../js/config_Jam.js"></script>
    <script src="../js/index_admin.js"></script>

</body>

</html>