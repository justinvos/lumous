<?php

  $page_id = 1;
  if(isset($_GET['p']))
  {
    $page_id = $_GET['p'];
  }

  include 'config/config.php';
  include 'database.php';

  if(false)
  {
    include 'section.php';
    include 'page.php';
    $page = new Page($page_id);

    //Needs to be the last include. Renders the webpage.
    include 'template/default.php';
  }
  else
  {
    echo "vError";
  }



  function get_section_id_map()
  {
    return array("About"=>"#about", "Journal"=>"#journal");
  }

  function has_user_logged_in()
  {
    return false;
  }

  function get_page_data()
  {
    //$json = file_get_contents("data/project_ipsum.json");

    $json = '{
      "title":"Project Ipsum",
      "sections":{
        "About":{"link":"#about", "content":"<h1>About Lumous</h1>"},
        "Journal":{"link":"#journal", "content":"<h1>Journal</h1>"}
      }
    }';

    return json_decode($json);
  }

/*function onLoad()
{
  $GLOBALS['has_head'] = true;

  $GLOBALS['menu_list'] = array("About"=>"#about", "Journal"=>"#journal");


  if($GLOBALS['has_head'])
  {
    echo create_head();
  }

  echo create_section("menu", create_menu($GLOBALS['menu_list']));


  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>';
  echo '<script src="js/main.js"></script>';
}*/

?>
