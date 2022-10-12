<?php

include"configuration/connect_db.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="asset/img/logo.ico" type="image/x-icon">
    <!-- css eksternal -->
    <link rel="stylesheet" href="pindex.css" />
    <title>Pedulikucingku</title>
  </head>
  <body>
    <div class="container">
      <div class="box-loading" id="box-loading">
        <div class="box-loading-child">
          <img src="asset/img/loading.gif" alt="">
        </div>
      </div>
      <div class="box-body" >
        <div class="logo">
            <img src="asset/img/logo.jpg" alt="">
        </div>
        <div class="head-box-body" id="hbb">
          <h2>
            PeduliKucingku
          </h2>
        </div>
        <div class="box-login">
          <form action="login/login_validate.php" method="post">
            <div class="box-all">
              <input type="text" name="input_username" placeholder="username"/>
            </div>
            <div class="box-all">
              <input type="password" name="input_pwd" placeholder="Sandi" id="ip"/>
            </div>   
            <div class="box-all">
              <input  type="checkbox" name="toogle-visibilty" id="tv">
              <label for="tv">Show password</label> 
            </div>          
            <div class="box-all">
              <button type="submit" name="btn_login">Login</button>
            </div>                
          </form>
        </div>
        <div class="box-create-account">
          <p>Belum punya akun <a href="register/index.php">Buat akun</a></p>
          <p>Lupa password <a href="#" class="res">reset password</a></p>
      </div>
      </div>
      
    <!-- sweet alert library-->
    <script src="js/sweetalert/sweetalert2.all.min.js"></script>
      
      <?php

          // notification
          if(isset($_GET["wrong"])){
            
            if($_GET["wrong"] == "id_pendaftaran_null"){
              
              echo"
                <script>
                  swal
                    .fire({
                          text: 'username salah, Akun tidak di temukan',
                          icon: 'warning',
                          showConfirmButton: true,
                          showCancelButton: false,
                          confirmButtonText: 'baik',
                          confirmButtonColor: 'blue',
                    });
                  
                </script>
              ";

            }else if($_GET["wrong"] == "pwd_null"){
              
              echo"
                <script>
                  swal
                    .fire({
                        text: 'Username Benar,tapi Pasword Salah',
                        icon: 'warning',
                        showConfirmButton: true,
                        showCancelButton: false,
                        confirmButtonText: 'baik',
                        confirmButtonColor: 'blue',
                    });
                
                </script>
              ";
              
            }else if($_GET["wrong"] == "field_null"){
              echo"
                <script>
                  swal
                    .fire({
                        title:'Login Gagal',
                        text: 'kolom username dan password harus di isi untuk login',
                        icon: 'error',
                        showConfirmButton: true,
                        showCancelButton: false,
                        confirmButtonText: 'baik',
                        confirmButtonColor: 'blue',
                        
                    });
                
                </script>
              ";
            }
          }
      ?>


<script src="js/Admin_index.js"></script>
    </body>
</html>
