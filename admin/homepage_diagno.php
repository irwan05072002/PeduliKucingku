<?php 
        include"../configuration/connect_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-diagnosa">
<div class="box-primary">
    <h1>KONSULTASI</h1>
</div>
    <div class="list-pertanyaan">
        <form action="ruleSistemPakar.php" method="POST">
            <table border="1" width="100%" cellpadding="0" cellspacing="0">

                <!-- first row -->
                <tr>
                    <th>No</th>
                    <th>Gejala</th>
                    <th>Setuju</th>
                </tr>
                    
                <!-- second row -->
                
                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G1'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>
                
                    <td style="text-align:center;">1</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G1" value="Demam"></td> 
                </tr>
                
                <tr>
                <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G2'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">2</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G2" value="Keluar air liur secara berlebihan (Viversalivasi)"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G3'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>
                
                    <td style="text-align:center;">3</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G3" value="Menggigit-gigit benda"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G4'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">4</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G4" value="pupil bola mata melebar"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G5'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">5</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G5" value="nafsu makan yang tidak normal atau berlebihan (anokresia)"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G6'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">6</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G6" value="sifat agresif atau brutal"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G7'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">7</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G7" value="hidung mengeluarkan aira atau berair"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G8'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">8</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G8" value="mata mengeluarkan air atau berair"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G9'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">9</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G9" value="mata memerah"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G10'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">10</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G10" value="luka pada lidah dan bibir"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G11'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">11</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G11" value="bersin-bersin"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G12'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">12</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G12" value="nafsu makan menurun"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G13'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">13</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G13" value="sering buang air besar atau diare"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G14'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">14</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G14" value="muntah"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G15'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">15</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G15" value="suka minum atau dehidrasi"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G16'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">16</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G16" value="lesu dan tidak bersemangat"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G17'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">17</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G17" value="batuk-batuk"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G18'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">18</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G18" value="memiliki riwayat radang paruh-paruh"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G19'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">19</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G19" value="sulit bernafas"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G20'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">20</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G20" value="tatapan kosong atau linglung atau depresi"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G21'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">21</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G21" value="hidung mengeluarkan lendir"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G22'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">22</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G22" value="memiliki riwayat sakit pada sendi"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G23'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">23</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G23" value="terdapat darah ketika BAB"></td> 
                </tr>

                <tr>
                    <!-- show gejala penyaki -->
                    <?php 
                        $query_cek_gejala = "SELECT ket_gejala FROM gejala_tb WHERE kode_gejala = 'G24'";
                        $result = mysqli_query($check_connection, $query_cek_gejala);
                        $data = mysqli_fetch_array($result)
                    ?>

                    <td style="text-align:center;">24</td>
                    <td><?php echo$data["ket_gejala"] ?></td>    
                    <td style="text-align:center;"><input type="checkbox" name="G24" value="sering buang air kecil"></td> 
                </tr>
            </table>

            <div class="warning_before">
                <p>
                    periksa kembali sebelum menekan tombol hasil diagnosa
                </p>
            </div>
            <div class="box-btn-diagno">
                <button type="submit" name="submit">DIAGNOSA</button>
            </div>
        </form>
        <!-- clas list pertanyaan -->
    </div>
</div>
</body>
</html>
