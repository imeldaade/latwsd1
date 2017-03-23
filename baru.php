<!DOCTYPE html>
<html>
<head>
<center><h3>BEKASI</h3></center>
</head>
<br>
1. Planner</br>
<body>
  <pre> 
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/planner_07010731/q/indonesia/bekasi.json");
  $parsed_json = json_decode($json_string);
  $code = $parsed_json->trip->airport_code;
  $cloud = $parsed_json->trip->cloud_cover->cond;
  $temph = $parsed_json->trip->temp_high->avg->C;
  $templ = $parsed_json->trip->temp_low->avg->C;
  echo
 "Cuaca : $cloud (Berawan) </br>
  Kode Airport Bekasi adalah : $code</br>
  Rata-rata suhu tertinggi : $temph <sup>O</sup> C </br>
  Rata-rata suhu terendah  : $templ <sup>O</sup> C\n";
  ?>
  </pre>
  </br>
2. Forecast</br>
 <pre>
 <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/forecast/q/indonesia/bekasi.json ");
  $parsed_json = json_decode($json_string);
  $forecast = $parsed_json->forecast->txt_forecast->date;
  echo
  "Waktu ramalan cuaca : $forecast
  \n";
  ?>
  </br>
   </pre>
3. Satellite</br>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/satellite/q/indonesia/bekasi.json ");
  $parsed_json = json_decode($json_string);
  $satelit1 = $parsed_json->satellite->image_url;
  $satelit2 = $parsed_json->satellite->image_url_ir4;
  $satelit3 = $parsed_json->satellite->image_url_vis;
  echo
  "Daftar Satelit Bekasi adalah :</br>
  1. $satelit1<br>
  2. $satelit2<br>
  3. $satelit3\n";
  ?>
  </pre>
 </body>
</html>