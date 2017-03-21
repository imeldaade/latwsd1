<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/099d6d8652fcd430/geolookup/conditions/q/indonesia/bekasi.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $weather = $parsed_json->{'current_observation'}->{'weather'};
  echo "The weather of ${location} is: ${weather}\n";
?>