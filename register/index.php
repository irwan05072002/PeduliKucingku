<!-- creating of registration -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- eksternal css style -->
    <link rel="stylesheet" href="r_style.css">
    <title>Daftar akun</title>
</head>
<body>
    <div class="container">

    <!-- box registration element -->
        <div class="box-registration">
        
            <!-- head element -->
            <div class="head">
                    <h1>Pendaftaran Akun Baru</h1>
            </div>

            <!-- notice element -->
            <div class="notice">
                <p>Mohon isikan data anda dengan benar</p>
            </div>

            <!-- form elements -->
            <div class="form_element">
                <form action="add_account_reg.php" name="form-register" method="POST" >
                
                    <table border="1">
                        <!-- input username -->
                        <tr>
                            <td>
                                <label for="username">Username</label>
                            </td>
                            <td>
                                <input type="text" name="username_reg" id="username" class="text">
                            </td>
                        </tr>

                        <!-- input sandi -->
                        <tr>
                            <td>
                                <label for="sandi">Sandi</label>
                            </td>
                            <td>
                                <input type="password" name="pwd_asli_reg" id="sandi" class="text">
                            </td>
                        </tr>

                        <!-- input nama user -->                        
                        <tr>
                            <td>
                                <label for="namaLengkap">Nama Pemilik</label>
                            </td>
                            <td>
                                <input type="text" name="nama_lengkap_reg" id="namaLengkap" class="text">
                            </td>
                        </tr>

                        <!-- input jenis kelamin -->
                        <tr>
                            <td>
                                <label for="jk">Jenis kelamin</label>
                            </td>
                            <td>
                                <select name="jk_reg" id="jk" class="select">
                                    <option value="0"> -pilih jenis kelamin- </option>
                                    <option value="L"> Laki-Laki </option>
                                    <option value="P"> Perempuan </option>
                                </select>
                            </td>
                        </tr>

                         <!-- input umur user -->
                        <tr>
                            <td>
                                <label for="6">Umur</label>
                            </td>
                            <td>
                                <input type="text" name="umur_reg" id="6" class="text" placeholder="example : 25">                                
                            </td>
                        </tr>

                        <!-- input provinsi user -->
                        <tr>
                            <td>
                                <label for="7">Provinsi</label>
                            </td>
                            <td>
                                <select name="prov_reg" id="7" class="select">
                                    <!-- list provinsi -->
                                    <option value="0">- Pilih Provinsi -</option>
                                    
                                    <!-- show provinsi from JSON -->
                                    <?php
                                        $file     = "../provinsi.json";
                                        $provJson = file_get_contents($file);
                                        $dataProv = json_decode($provJson, true);
                                    
                                        foreach($dataProv as $data){
                                    ?>
                                        <option name="selectProvinsi" value="<?php echo $data['prov'];?>"><?php echo $data['prov']?></option>
                                    <?php
                                        }   
                                    ?>
                                </select>
                            </td>

                        <!-- input kabupaten user -->
                        </tr>

                        <tr>
                            <td>
                                <label for="8">Kabupaten</label>
                            </td>
                            <td>
                                <select name="kab_reg" id="8" class="select">
                                    <!-- list kabupaten -->
                                    <option value="0">- Pilih kabupaten -</option>
                                </select>
                            </td>
                        </tr>

                        <!-- input kecamatan -->
                        <tr>
                            <td>
                                <label for="9">Kecamatan</label>
                            </td>
                            <td>
                                 <select name="kecamatan_reg" id="9" class="select">
                                    <!-- list kecamatan -->
                                    <option value="0">- Pilih kecamatan -</option>
                                </select>
                            </td>
                        </tr>

                        <!-- input kelurahan -->
                        <tr>
                            <td>
                                <label for="10">kelurahan</label>
                            </td>
                            <td>
                                 <select name="kelurahan_reg" id="10" class="select">
                                    <!-- list kecamatan -->
                                    <option value="0">- Pilih kelurahan -</option>
                                </select>
                            </td>
                        </tr>

                        <!-- input alamat -->
                        <tr>
                            <td>
                                <label for="11">Alamat</label>
                            </td>
                            <td>
                                <input type="text" name="alamat_reg" id="11" class="text" placeholder="detail jalan, nomor dan desa">
                            </td>
                        </tr>

                        <!-- input kodepos -->
                        <tr>
                            <td>
                                <label for="12">Kodepos</label>
                            </td>
                            <td>
                                <select name="kodepos_reg" id="12" class="select">
                                    <option value="0">- Pilih kodepos -</option>
                                </select>
                            </td>
                        </tr>

                        <!-- input jenis kucing -->
                        <tr>
                            <td>
                                <label for="13">Jenis Kucing</label>
                            </td>
                            <td>
                                <input type="text" name="jeniskucing_reg" id="13" class="text" placeholder="example: persia">
                            </td>
                        </tr>
                        
                        <!-- input Usia kucing -->
                        <tr>
                            <td>
                                <label for="13">Usia Kucing</label>
                            </td>
                            <td>
                                <input type="text" name="usiakucing_reg" id="13" class="text" placeholder="example: 5 tahun">
                            </td>
                        </tr>

                        <!-- buton -->
                          <tr>
                            <td>
                                <button name="btn_back" id="btn_back">Kembali</button>
                            </td>
                            <td>
                                <button type="submit" name="btn_submit_reg" id="btn_submit_reg">Daftar Akun</button>
                            </td>
                           
                        </tr>
                    </table>
                </form>   
            </div>

            <!-- message for user when register -->
                <div class="message">
                    <div class="head-message">
                        <h4>Keterangan :</h4>
                    </div>
                    <div class="text-message">
                        <p>Bagi yang ingin menggunakan apilikasi Pedulikucingku wajib
                            memiliki akun peduli kucingku, dimana hal ini berupakan
                            suatu bentuk komitmen anda kepada kami bahwasannya
                            anda benar-benar mengunakan aplikasi kami
                        
                            Segala informasi dan ketentuan serta privacy anda sangat dijaga kerahasiannya oleh kami

                            Terima kasih telah menggunakan aplikasi kami
                            semoga kucing anda sehat
                        </p>
                    </div>
                </div>
        </div>
    </div>

    <!-- link sweetalert notification -->
    <script src='../js/sweetalert/sweetalert2.all.min.js'></script>
    <!-- link form register validation -->
    <script src="../js/regivalid.js"></script>
</body>
</html>