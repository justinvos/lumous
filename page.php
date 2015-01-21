<?php

  include('config/config.php');

  include('database/database.php');
  include('database/section.php');
  include('database/page.php');

  $page = new Page($database, 1);

  include('template/default.php');


  function has_user_logged_in()
  {
    return False;
  }
?>
