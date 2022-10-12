<?php
  $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/MEWS/DigitalForecast/DigitalForecast-SumateraUtara.xml");
 
  echo "tahun : " .$data->forecast->issue->year . "<br>";
  echo "hari : " .$data->forecast->issue->day . "<br>";
  echo "jam : " . $data->forecast->issue->hour . "<br>";
  echo "menit : " . $data->forecast->issue->minute . "<br>";
  echo "Detik : " . $data->forecast->issue->second . "<br>"; 
 
  echo $data->forecast->area->name->weather
?>


<!-- forecast
 area
  parameter = humax
  parameter = tmax
  parameter = humin
  parameter = tmin
  parameter = t
  parameter = weather
  parameter = wd
  parameter = ws -->