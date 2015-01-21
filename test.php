<?php

  include("database/database.php");
  include("database/section.php");
  include("database/page.php");

  $page = new Page($database, 1);

  //$section = array(new Section(array("title"=>"Jounal", "name"=>"journal", "content"=>"<h1>Journal</h1>")));
  //$section = array(new Section($database->get_section(1)));
  //$section = $page->get_sections();

  //print_r($page->get_section_ids());

  //print_r($page->get_sections());

  $section = $page->get_sections();

  print_r($section);

  /*$i = 0;
  while($i < sizeof($section))
  {
    echo '<a href="';
    echo $section[$i]->get_name();
    echo '"><li>';
    echo $section[$i]->get_title();
    echo '</li></a>';
    $i = $i + 1;
  }*/


  /*$i = 0;
  while($i < sizeof($section))
  {
    echo '<a href="' . $section[$i]->get_name() . '"><li>' . $section[$i]->get_title() . '</li></a>';
    $i = $i + 1;
  }*/
?>
