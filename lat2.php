<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/planner_07010731/q/indonesia/bekasi.json");
  $parsed_json = json_decode($json_string);
  $code = $parsed_json->trip->airport_code;
  echo "Kode Airport Bekasi adalah : $code\n";
?>