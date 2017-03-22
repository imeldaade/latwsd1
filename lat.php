  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/planner_07010731/q/indonesia/bekasi.json");
  $parsed_json = json_decode($json_string);
  $code = $parsed_json->trip->airport_code;
  $cloud = $parsed_json->trip->cloud_cover->cond;
  $temph = $parsed_json->trip->temp_high->avg->C;
  $templ = $parsed_json->trip->temp_low->avg->C;
  echo
  "Kode Airport Bekasi adalah : $code </br>
  Cuaca : $cloud (Berawan) </br>
  Rata-rata suhu tertinggi : $temph <sup>O</sup> C </br>
  Rata-rata suhu terendah  : $templ <sup>O</sup> C\n";
?>
