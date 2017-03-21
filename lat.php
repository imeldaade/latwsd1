<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/astronomy/q/Indonesia/Semarang.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->response->termsofService;
  echo "Term Of Service : $location\n";
?>