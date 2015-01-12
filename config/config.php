<?php


  function load_config()
  {
    $json = file_get_contents("config/main.json");
    $main_config = json_decode($json);

    //echo $file_text;
    $GLOBALS['site_name'] = $main_config->{'site_name'};
    $GLOBALS['title'] = $main_config->{'title'};
    $GLOBALS['default_cover'] = $main_config->{'default_cover'};
  }

?>
