<?php

  if(can_load_config())
  {
    load_config();
  }


  function can_load_config()
  {
    return file_exists("config/main.json");
  }

  function load_config()
  {
    $json = file_get_contents("config/main.json");
    $main_config = json_decode($json);

    $key_list = array(
      'site_name',
      'short_site_name',
      'title',
      'cover',
      'password_salt',
      'db_host',
      'db_name',
      'db_username',
      'db_password'
    );

    $i = 0;
    while($i < sizeof($key_list))
    {
      if(array_key_exists($key_list[$i], $main_config))
      {
        $GLOBALS[$key_list[$i]] = $main_config->{$key_list[$i]};
      }

      $i++;
    }
  }

?>
