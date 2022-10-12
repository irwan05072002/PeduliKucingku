<?php

// connection to database
include"../configuration/connect_db.php";


// ketika tombol kembali di tekan
if(isset($_POST["btn_back"])){
    header("location:../index.php");
}

// ketika tombol daftar di tekan
if(isset($_POST["btn_submit_reg"])){
    include"index.php";

    $username_reg       = strtolower($_POST["username_reg"]);
    $pwd_asli_reg       = strtolower($_POST["pwd_asli_reg"]);
    $nama_lengkap_reg   = strtolower($_POST["nama_lengkap_reg"]);    
    $jk_reg             = strtolower($_POST["jk_reg"]);    
    $umur_reg           = strtolower($_POST["umur_reg"]);    
    $prov_reg           = strtolower($_POST["prov_reg"]);    
    $kab_reg            = strtolower($_POST["kab_reg"]);    
    $kecamatan_reg      = strtolower($_POST["kecamatan_reg"]);    
    $kelurahan_reg      = strtolower($_POST["kelurahan_reg"]);    
    $alamat_reg         = strtolower($_POST["alamat_reg"]);    
    $kodepos_reg        = strtolower($_POST["kodepos_reg"]);    
    $jeniskucing_reg    = strtolower($_POST["jeniskucing_reg"]);    
    $usiakucing_reg     = strtolower($_POST["usiakucing_reg"]);    

    // validation to form register before append indatabase
    if($username_reg == "" OR 
        $pwd_asli_reg == "" OR 
        $nama_lengkap_reg == "" OR
        $jk_reg == "0" OR 
        $umur_reg == "" OR 
        $prov_reg == "0" OR 
        $kab_reg == "0" OR 
        $kecamatan_reg == "0" OR 
        $kelurahan_reg == "0" OR 
        $alamat_reg == "" OR
        $kodepos_reg == "0" OR
        $jeniskucing_reg == "" OR
        $usiakucing_reg == ""
        )
    {

        die();

    }else{
        
        // cek username apakah sudah ada
        $query_check_username = "SELECT username_user FROM users_account WHERE username_user = '$username_reg'";
        $result = mysqli_query($check_connection, $query_check_username);
        $data_username = mysqli_num_rows($result);

        if($data_username == 1){

         
            echo"      
                    <script>
                        swal
                            .fire({
                                title: 'GAGAL DAFTAR',
                                text: 'maaf username sudah dimiliki orang lain',
                                icon: 'warning',
                                showConfirmButton: true,
                                showCancelButton: false,
                                confirmButtonText: 'baik',
                                confirmButtonColor: 'green',
                            });
                        </script>
                    ";

        }else{

            // enkripsi sandi
            $pwd_enkripsi = password_hash($pwd_asli_reg, PASSWORD_DEFAULT);

            $query_createUsers = "INSERT INTO users_account
                                VALUES
                            ('1', '$username_reg', '$pwd_asli_reg', '$pwd_enkripsi','$nama_lengkap_reg','$jk_reg',
                            '$umur_reg','$prov_reg','$kab_reg','$kecamatan_reg','$kelurahan_reg','$alamat_reg','$kodepos_reg',
                            '$jeniskucing_reg', '$usiakucing_reg')
                            ";

            $result_createUsers = mysqli_query($check_connection, $query_createUsers);

            // check register
            if(!$result_createUsers){
            
                die();
                
            }else{
                echo"      
                    <script>
                        swal
                            .fire({
                                title: 'Daftar Akun Berhasil',
                                text: 'silahkan login untuk masuk',
                                icon: 'success',
                                showConfirmButton: true,
                                showCancelButton: false,
                                confirmButtonText: 'baik',
                                confirmButtonColor: 'green',
                            });
                        </script>
                    ";
            }
        }
  
       

        
        }
}


?>