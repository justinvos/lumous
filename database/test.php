<?php
  //error_reporting(E_ALL);
  include("database.php");

  //$page = new Page(1);

  //echo $page->get_title();

  //query_db('SELECT title,sections FROM pages WHERE id=' . 2);



  $results = $database->query("Select * from pages;");

  echo $results[0]["title"];
  echo $results[0]["sections"];
?>
