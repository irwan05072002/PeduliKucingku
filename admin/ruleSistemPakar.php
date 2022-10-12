<?php
    // connection to database
    include"../configuration/connect_db.php";

    // session declaration
    session_start();


// check session
if(!isset($_SESSION["LOGIN"]) or !isset($_SESSION["username_user"]) or !isset($_SESSION["nama_user"])){
        
    header("location: ../logout/logout.php");
} 
    

// jika tombol hasil diagnosa di tekans
if(isset($_POST["submit"])){
    
    // simpan pilihan ke dadam variabel untuk di tampilkandi hasil dan cetak
    $P1 = $_POST["G1"];
    $P2 = $_POST["G2"];
    $P3 = $_POST["G3"];
    $P4 = $_POST["G4"];
    $P5 = $_POST["G5"];
    $P6 = $_POST["G6"];
    $P7 = $_POST["G7"];
    $P8 = $_POST["G8"];
    $P9 = $_POST["G9"];
    $P10 = $_POST["G10"];
    $P11 = $_POST["G11"];
    $P12 = $_POST["G12"];
    $P13 = $_POST["G13"];
    $P14 = $_POST["G14"];
    $P15 = $_POST["G15"];
    $P16 = $_POST["G16"];
    $P17 = $_POST["G17"];
    $P18 = $_POST["G18"];
    $P19 = $_POST["G19"];
    $P20 = $_POST["G20"];
    $P21 = $_POST["G21"];
    $P22 = $_POST["G22"];
    $P23 = $_POST["G23"];
    $P24 = $_POST["G24"];

    // lalu simpan ke dalam session
    $_SESSION["P1"] = $P1;
    $_SESSION["P2"] = $P2;
    $_SESSION["P3"] = $P3;
    $_SESSION["P4"] = $P4;
    $_SESSION["P5"] = $P5;
    $_SESSION["P6"] = $P6;
    $_SESSION["P7"] = $P7;
    $_SESSION["P8"] = $P8;
    $_SESSION["P9"] = $P9;
    $_SESSION["P10"] = $P10;
    $_SESSION["P11"] = $P11;
    $_SESSION["P12"] = $P12;
    $_SESSION["P13"] = $P13;
    $_SESSION["P14"] = $P14;
    $_SESSION["P15"] = $P15;
    $_SESSION["P16"] = $P16;
    $_SESSION["P17"] = $P17;
    $_SESSION["P18"] = $P18;
    $_SESSION["P19"] = $P19;
    $_SESSION["P20"] = $P20;
    $_SESSION["P21"] = $P21;
    $_SESSION["P22"] = $P22;
    $_SESSION["P23"] = $P23;
    $_SESSION["P24"] = $P24;


    // PEMILIHAN PENYAKIT BERDASARKAN GEJALA ATAU PILIHAN YANG DI PILIH
    //================================================= penyakit P1  -> RABIES
    if(isset($_POST["G1"]) OR 
        isset($_POST["G2"]) OR 
            isset($_POST["G3"]) OR 
                isset($_POST["G4"]) OR 
                    isset($_POST["G5"]) OR 
                        isset($_POST["G6"]))
    {  
        // inisialisasi bobot untuk gejala

        // $G1  demam
        if(isset($_POST["G1"])){
            $value_G1 = 1;
        }else{
            $value_G1 = 0;
        }

            // $G2  hipersalivasi (keluar air liuar yang berlebihan)
            if(isset($_POST["G2"])){
                $value_G2 = 1;
            }else{
                $value_G2 = 0;
            }

        // $G3  menggigit-gigit benda
        if(isset($_POST["G3"])){
            $value_G3 = 1;
        }else{
            $value_G3 = 0;
        }    

                // $G4  pupil melebar
                if(isset($_POST["G4"])){
                    $value_G4 = 1;
                }else{
                    $value_G4 = 0;
                }

        // $G5  perubahan anormal pada nafsu makan (anoreksia)
        if(isset($_POST["G5"])){
            $value_G5 = 1;
        }else{
            $value_G5 = 0;
        }

            // $G6  agresi
            if(isset($_POST["G6"])){
                $value_G6 = 1;
            }else{
                $value_G6 = 0;
            }        
        
        // // CALCULATE PRESTASE P1
        $sigma_G1   = $value_G1 + $value_G2 +$value_G3 + $value_G4 + $value_G5 + $value_G6;
        
        // probability
        $calculate_persentase_of_P1 = ($sigma_G1 / 6) * 100;

        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P1"] =   $calculate_persentase_of_P1;

     // jika gejala pada P1 tidak dipilih maka akan menampilkan 0%
    }else if(!isset($_POST["G1"]) OR 
                !isset($_POST["G2"]) OR 
                    !isset($_POST["G3"]) OR 
                        !isset($_POST["G4"]) OR 
                            !isset($_POST["G5"]) OR 
                                !isset($_POST["G6"]))
    {
        $value_G1 = 0;
        $value_G2 = 0;
        $value_G3 = 0;
        $value_G4 = 0;
        $value_G5 = 0;
        $value_G6 = 0;
        
        // // CALCULATE PRESTASE P1
        $calculate_persentase_of_P1 = $value_G1 + $value_G2 +$value_G3 + $value_G4 + $value_G5 + $value_G6;

        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P1"] =   $calculate_persentase_of_P1;
    }




    //================================================= penyakit P2  -> INFEKSI SALURAN PERNAPASAN
    if(isset($_POST["G7"]) OR
                isset($_POST["G8"]) OR
                    isset($_POST["G1"]) OR
                        isset($_POST["G9"]) OR
                            isset($_POST["G11"]) OR
                                isset($_POST["G12"])    
    ){

       // $G7; hidung berair
       if(isset($_POST["G7"])){
            $value_G7 = 1;
        }else{
            $value_G7 = 0;
        }

            // $G8; mata berair
            if(isset($_POST["G8"])){
                    $value_G8 = 1;
            }else{
                $value_G8 = 0;
            }

       // $G1; demam
       if(isset($_POST["G1"])){
            $value_G1 = 1;
        }else{
            $value_G1 = 0;
        }

            // $G9; mata memerah
            if(isset($_POST["G9"])){
                    $value_G9 = 1;
                }else{
                    $value_G9 = 0;
                }
       
        // $G11;bersin
       if(isset($_POST["G11"])){
            $value_G11 = 1;
        }else{
            $value_G11 = 0;
        }

            // $G12;nafsu makan menurun
            if(isset($_POST["G12"])){
                $value_G12 = 1;
            }else{
                $value_G12 = 0;
            }

        //  // CALCULATE PRESTASE P2
        $sigma_G2 = $value_G7 + $value_G8 + $value_G1 + $value_G9 + $value_G11 + $value_G12;
        
        // probability
        $calculate_persentase_of_P2 = ($sigma_G2 / 6) * 100;

        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P2"] =   $calculate_persentase_of_P2;
        
        // jika gejala pada P2 tidak dipilih maka akan menampilkan 0%
    }else if(!isset($_POST["G7"]) OR
            !isset($_POST["G8"]) OR
                    !isset($_POST["G1"]) OR
                        !isset($_POST["G9"]) OR
                            !isset($_POST["G11"]) OR
                                !isset($_POST["G12"]) )
    {

    $value_G7 = 0;
    $value_G8 = 0;
    $value_G1 = 0;
    $value_G9 = 0;
    $value_G11 = 0;
    $value_G12 = 0;

    //  // CALCULATE PRESTASE P2
        $calculate_persentase_of_P2 = $value_G7 + $value_G8 + $value_G1 + $value_G9 + $value_G11 + $value_G12;
        
        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P2"] =   $calculate_persentase_of_P2;
    }

  



    //================================================= penyakit P3  -> PANLEUKOPENIA VIRUS

    if(isset($_POST["G12"]) OR
            isset($_POST["G13"]) OR
                isset($_POST["G14"])
    
    ){

        //$G12 nafsu makan menurun
        if(isset($_POST["G12"])){
            $value_G12 = 1;
        }else{
            $value_G12 = 0;
        }        
        
        //$G13 diare
        if(isset($_POST["G13"])){
            $value_G13 = 1;
        }else{
            $value_G13 = 0;
        }

        //$G14  muntah
        if(isset($_POST["G14"])){
            $value_G14 = 1;
        }else{
            $value_G14 = 0;
        }

        //  // CALCULATE PRESTASE P3
        $sigma_G3   = $value_G12 + $value_G13 + $value_G14;
        
        // probability
        $calculate_persentase_of_P3 = ($sigma_G3 / 3) * 100;

        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P3"] =   $calculate_persentase_of_P3;
        
        // jika gejala pada P3 tidak dipilih maka akan menampilkan 0%
    }else if(!isset($_POST["G12"]) OR
                !isset($_POST["G13"]) OR
                    !isset($_POST["G14"])
    ){

        $value_G12 = 0;
        $value_G13 = 0;
        $value_G14 = 0;

        //  // CALCULATE PRESTASE P3
        $calculate_persentase_of_P3 = $value_G12 + $value_G13 + $value_G14;
        
        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P3"] =   $calculate_persentase_of_P3;

    }




    //================================================= penyakit P4  -> ENDOPARASIT
    if(isset($_POST["G13"]) OR
        isset($_POST["G15"]) OR
            isset($_POST["G16"]) 
    ){

        // $G13 diare
        if(isset($_POST["G13"])){
            $value_G13 = 1;
        }else{
            $value_G13 = 0;
        }

        // $G15 dehidrasi
        if(isset($_POST["G15"])){
            $value_G15 = 1;
        }else{
            $value_G15 = 0;
        }

        // $G16 lesu
        if(isset($_POST["G16"])){
            $value_G16 = 1;
        }else{
            $value_G16 = 0;
        }

        //  // CALCULATE PRESTASE P4
        $sigma_G4                   = $value_G13 + $value_G15 + $value_G16;
        
        // probability
        $calculate_persentase_of_P4 = ($sigma_G4 / 3) * 100;

        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P4"] =   $calculate_persentase_of_P4;

    // jika gejala pada P2 tidak dipilih maka akan menampilkan 0%
    }else if(!isset($_POST["G13"]) OR
                !isset($_POST["G15"]) OR
                    !isset($_POST["G16"])
    ){
        $value_G13 = 0;
        $value_G15 = 0;
        $value_G16 = 0;

        //  // CALCULATE PRESTASE P4
        $calculate_persentase_of_P4 = $value_G13 + $value_G14 + $value_G16;

        // input diagnosa penyakit ke dalam session
        $_SESSION["calculate_persentase_of_P4"] =   $calculate_persentase_of_P4;
        
    }




    //================================================= penyakit P5  -> FELINE CHLAMYDIA
    if(isset($_POST["G17"]) OR
        isset($_POST["G11"]) OR
            isset($_POST["G5"])OR
                isset($_POST["G18"]) OR
                    isset($_POST["G19"]) OR
                        isset($_POST["G1"])OR
                            isset($_POST["G8"]))
        {
            // $G17 batuk
            if(isset($_POST["G17"])){
                $value_G17 = 1;
            }else{
                $value_G17 = 0;
            }

                // $G11 bersin
                if(isset($_POST["G11"])){
                    $value_G11 = 1;
                }else{
                    $value_G11 = 0;
                }

            // $G5 perubahan anormal pada nafsu makan (anoreksia)
            if(isset($_POST["G5"])){
                $value_G5 = 1;
            }else{
                $value_G5 = 0;
            }

                // $G18 radang paru-paru
                if(isset($_POST["G18"])){
                    $value_G18 = 1;
                }else{
                    $value_G18 = 0;
                }
            
            // $G19 susa bernafas
            if(isset($_POST["G19"])){
                $value_G19 = 1;
            }else{
                $value_G19 = 0;
            }

                // $G1 demam
                if(isset($_POST["G1"])){
                    $value_G1 = 1;
                }else{
                    $value_G1 = 0;
                }

            // $G8 mata berair
            if(isset($_POST["G8"])){
                $value_G8 = 1;
            }else{
                $value_G8 = 0;
            }

            // CALCULATE PRESTASE P5
            $sigma_G5 = $value_G17 + $value_G11 + $value_G5 + $value_G18 + $value_G19 + $value_G1 + $value_G8;
            
            // probability
            $calculate_persentase_of_P5 = ($sigma_G5 / 7) * 100; 

            // input diagnosa penyakit ke dalam session
            $_SESSION["calculate_persentase_of_P5"] =   $calculate_persentase_of_P5;
            
            
        // jika gejala pada P2 tidak dipilih maka akan menampilkan 0%
    }else if(!isset($_POST["G17"]) OR
                    !isset($_POST["G11"]) OR
                        !isset($_POST["G5"])OR
                            !isset($_POST["G18"]) OR
                                !isset($_POST["G19"]) OR
                                    !isset($_POST["G1"])OR
                                        !isset($_POST["G8"]))
        {

            $value_G17 = 0;
            $value_G11 = 0;
            $value_G5  = 0;
            $value_G18 = 0;
            $value_G19 = 0;
            $value_G1  = 0;
            $value_G8 = 0;
            
            // CALCULATE PRESTASE P5
            $calculate_persentase_of_P5 = $value_G17 + $value_G11 + $value_G5 + $value_G18 + $value_G19 + $value_G1 + $value_G8;
            
            // input diagnosa penyakit ke dalam session
            $_SESSION["calculate_persentase_of_P5"] =   $calculate_persentase_of_P5;
        }




    //================================================= penyakit P6  -> FELINE URINARY SINDROME (FUS)
        if(isset($_POST["G23"]) OR
                isset($_POST["G24"]) OR
                    isset($_POST["G12"]) OR
                        isset($_POST["G14"]) OR
                            isset($_POST["G15"]) OR
                                isset($_POST["G20"]))
        {

            // G23 ada darah dalam urin
            if(isset($_POST["G23"])){
                $value_G23 = 1;
            }else{
                $value_G23 = 0;
            }

            // G24 sering buang air kecil
            if(isset($_POST["G24"])){
                $value_G24 = 1;
            }else{
                $value_G24 = 0;
            }

            // G12 nafsu makan menurun
            if(isset($_POST["G12"])){
                $value_G12 = 1;
            }else{
                $value_G12 = 0;
            }

            // G14 muntah
            if(isset($_POST["G14"])){
                $value_G14 = 1;
            }else{
                $value_G14 = 0;
            }

            // G15 dehidrasi
            if(isset($_POST["G15"])){
                $value_G15 = 1;
            }else{
                $value_G15 = 0;
            }
            
            // G20 depresi
            if(isset($_POST["G20"])){
                $value_G20 = 1;
            }else{
                $value_G20 = 0;
            }

            // CALCULATE PRESTASE P6

            $sigma_G6 = $value_G23 + $value_G24 + $value_G12 + $value_G14 + $value_G15 + $value_G20;
            
            // probability
            $calculate_persentase_of_P6 = ($sigma_G6 / 6) * 100; 
            
            // input diagnosa penyakit ke dalam session
            $_SESSION["calculate_persentase_of_P6"] =   $calculate_persentase_of_P6;
            
            // jika gejala pada P2 tidak dipilih maka akan menampilkan 0%
        }else if(!isset($_POST["G23"]) OR
                    !isset($_POST["G24"]) OR
                        !isset($_POST["G12"]) OR
                            !isset($_POST["G14"]) OR
                                !isset($_POST["G15"]) OR
                                    !isset($_POST["G20"]))
        {

            $value_G23 = 0;
            $value_G24 = 0;
            $value_G12 = 0;
            $value_G14 = 0;
            $value_G15 = 0;
            $value_G20 = 0;

            // CALCULATE PRESTASE P6
            $calculate_persentase_of_P6 = $value_G23 + $value_G24 + $value_G12 + $value_G14 + $value_G15 + $value_G20;
            
            // input diagnosa penyakit ke dalam session
            $_SESSION["calculate_persentase_of_P6"] =   $calculate_persentase_of_P6;
            
        }




    //================================================= penyakit P7  -> FELINE CELICI VIRUS
    if(isset($_POST["G12"]) OR
            isset($_POST["G8"]) OR
                isset($_POST["G21"]) OR
                    isset($_POST["G10"]) OR
                        isset($_POST["19"]) OR
                            isset($_POST["22"]))
    {

            //G12 nafsu makan menurun
            if(isset($_POST["G12"])){
                $value_G12 = 1;
            }else{
                $value_G12 = 0;
            }

            //G8  mata berair
            if(isset($_POST["G8"])){
                $value_G8 = 1;
            }else{
                $value_G8 = 0;
            }

            //G21 hidung berlendir
            if(isset($_POST["G21"])){
                $value_G21 = 1;
            }else{
                $value_G21 = 0;
            }

            //G10 luka pada lidah dan bibir
            if(isset($_POST["G10"])){
                $value_G10 = 1;
            }else{
                $value_G10 = 0;
            }

            //G19 sulit bernafas
            if(isset($_POST["G19"])){
                $value_G19 = 1;
            }else{
                $value_G19 = 0;
            }

            //G22 sakit sendi
            if(isset($_POST["G22"])){
                $value_G22 = 1;
            }else{
                $value_G22 = 0;
            }

            // CALCULATE PRESTASE P7
            $sigma_G7 = $value_G12 + $value_G8 + $value_G21 + $value_G10 + $value_G19 + $value_G22;
            
            // probability
            $calculate_persentase_of_P7 = ($sigma_G7 / 6) * 100;

            // input diagnosa penyakit ke dalam session
            $_SESSION["calculate_persentase_of_P7"] =   $calculate_persentase_of_P7;
            
            // jika gejala pada P2 tidak dipilih maka akan menampilkan 0%
        }else if(!isset($_POST["G12"]) OR
                !isset($_POST["G8"]) OR
                !isset($_POST["G21"]) OR
                        !isset($_POST["G10"]) OR
                        !isset($_POST["19"]) OR
                                !isset($_POST["22"]))
    {

            $value_G12 = 0;
            $value_G8  = 0;
            $value_G21 = 0;
            $value_G10 = 0;
            $value_G19 = 0;
            $value_G22 = 0;
            
            // CALCULATE PRESTASE P7
            $calculate_persentase_of_P7 = $value_G12 + $value_G8 + $value_G21 + $value_G10 + $value_G19 + $value_G22;
            
            // input diagnosa penyakit ke dalam session
            $_SESSION["calculate_persentase_of_P7"] =   $calculate_persentase_of_P7;
    }

            header("location:dashboard.php?next=finish");

} // btn submit tidak ditekan     
?>3