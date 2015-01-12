<?php

  include 'page.php';

  function onLoad()
  {
    $GLOBALS['title'] = "Project Ipsum";

    $GLOBALS['has_head'] = true;

    $GLOBALS['menu_list'] = array("About"=>"#about", "Journal"=>"#journal");
    

    if($GLOBALS['has_head'])
    {
      echo create_head();
    }

    echo create_section("menu", create_menu($GLOBALS['menu_list']));


  }

?>
