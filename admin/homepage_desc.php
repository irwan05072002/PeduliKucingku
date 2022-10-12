<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
</head>
<body>
    <div class="container-homepage-desc">
        <div class="box-jam">
            <p id="ket_waktu"></p>
            <!-- <marquee behavior="scroll" direction="left" scrollamount="3">
            <strong>PENGUMUMAN<span> |  Peduli Pada Kucing Merupakan Bentuk Anda Mencintai Lingkungan <span> | Salam Developer</span></span></strong>            
            </marquee> -->
        </div>
        <div class="box-cuaca desc1">
        <!-- // <?php 
            // $request_API = "https://data.bmkg.go.id/DataMKG/MEWS/DigitalForecast/DigitalForecast-SumateraUtara.xml";
            // $temp = file_get_contents($request_API);
            // $data_cuaca_API_bmkg = simplexml_load_string($temp);
        // ?> -->
            <div class="title-cuaca box-cuaca-set-ukuran">
                <h3>Prakiraan Cuaca | BMKG INDONESIA</h3>
            </div>
            <div class="twobox .box-cuaca-set-ukuran">
                <div class="logo-cuaca .box-cuaca-set-ukuran">
                    <!-- masukan data logo -->
                </div>
                <div class="detail-cuaca .box-cuaca-set-ukuran">
                    <!-- masukan data keterangan cuaca-->
                </div>
            </div>
                <div class="box-gps box-cuaca-set-ukuran">
                <!-- masukan data lokasi users -->
                <?php
                // parsing data weather / cuaca
                // $weather_data = $data_cuaca_API_bmkg->forecast->area[0]->parameter[6]->timerange->value;

                // // logic weather
                // if($weather_data == 0){
                //     $fix_cuaca = "Cerah / Clear Skies"
                // }else if($weather_data = 1){
                //     $fix_cuaca = "Cerah Berawan / Partly";
                // }else if($weather_data){

                // }
                // ?>  
                </div>
        </div>

        <div class="desc1 img-logo">
            <img src="../asset/img/logo.jpg" alt="">
        </div>

            <!-- deskripsi -->
            <div class="desc2">
                <p>
                    Halo Pecinta Kucing
                    <br>
                    <br>
                    Aplikasi ini bertujuan untuk mendiagnosa penyakit pada kucing yang umumnya jarang di jumpai di beberapa masyarakat
                    dengan harapan kucing yang sedang kamu pelihara bahkan jika kamu melihat kucing lain di jalanan
                    dapat kamu berikan perawatan 
                    <br><br>
                    PeduliKucingku akan memberikan beberapa pertanyaan gejala, dan kamu diminta untuk menjawab
                    lalu PeduliKucingku akan mendiagosa penyakit apa yang sedang kucing kamu alami, 
                    <br><br>        
                    kamu bisa melihat hasil diagnosa dan penyakit dominan yang kucing kamu sedang alami
                    dan kamu bisa mencetak file hasil diagnosa sebagai bahan referensi kamu ketika ingin
                    melakukan penanangan  lebih lanjut, karena di file tersebut tertera penanganan dan perawatan
                </p>
            </div>
            
            <div class="box-ready">
                    <h4>Video Terbaru</h4> 
                    <div class="frame-video">
                        <video src="../asset/video/dashboard-video.mp4" CONTROLS>INI VIDEO</video>
                    </div>     
            </div>
       </div>
</body>
</html>