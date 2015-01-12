<?php

  include 'config/config.php';
  include 'style.php';

  onAwake();


  //Needs to be the last include. Renders the webpage.
  include 'page.php';

  function onAwake()
  {
    load_config();
  }

  function onHeader()
  {
    echo "<style>";
    echo ".head_wrap{";
    echo "background: " . $GLOBALS['default_cover'] . ";";
    echo "background-size: 100%;";
    echo "}";
    echo "</style>";
  }

  function onLoad()
  {
    $GLOBALS['has_head'] = true;

    $GLOBALS['menu_list'] = array("About"=>"#about", "Journal"=>"#journal");


    if($GLOBALS['has_head'])
    {
      echo create_head();
    }

    echo create_section("menu", create_menu($GLOBALS['menu_list']));


  }

?>
