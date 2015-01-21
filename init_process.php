<html>

  <head>
    <link rel='stylesheet' href="http://127.0.0.1/justinvos.github.io/lofty.css">
  </head>

  <body>

    <?php
      echo "<p>Passed stage 0</p>";
      include($_SERVER['DOCUMENT_ROOT'] . '/database.php');
      include($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');


      echo "<p>Passed stage 1</p>";
      $required_list = array("site_name", "db_host", "db_name", "db_username", "root_password");
      $optional_list = array("short_site_name", "db_password", "password_salt");

      $error_level = False;
      $msg = "";

      $i = 0;
      while($i < sizeof($required_list))
      {
        if(array_key_exists($required_list[$i], $_GET))
        {
          echo "<p>" . $required_list[$i] . ' has been set to "' . $_GET[$required_list[$i]] . '".</p>';
          $GLOBALS[$required_list[$i]] = $_GET[$required_list[$i]];
        }
        else
        {
          echo "<p>" . $required_list[$i] . " was not provided.</p>";
          $error_level = true;
        }
        $i++;
      }

      echo "<p>Passed stage 2</p>";

      echo "<p>Passed stage 3</p>";

      if(!$error_level)
      {
        if(can_connect_db())
        {
          echo "Connected to database successfully.";
        }
        else
        {
          echo "Could not connect to database.";
          $error_level = True;
        }
      }

      echo "<p>Passed stage 4</p>";

      if($error_level)
      {
        echo "Error true";
      }
      else
      {
        echo "Error false";
      }
    ?>
  </body>

</html>
