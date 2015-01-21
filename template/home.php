<?php



?>


<html>

  <head>

    <title><?php echo $GLOBALS['title'] . " - " . $GLOBALS['short_site_name']; ?></title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="template/css/main.css">

  </head>

  <body>

    <div class="head_wrap">

      <div class="head_area">

        <a href="#"><h2><?php echo $GLOBALS['site_name']; ?></h2></a>

        <ul>
          <a href="#"><li>Home</li></a>
          <?php

            if(has_user_logged_in())
            {
              echo get_user()['name'];
            }
            else
            {
              echo '<a href="#"><li>Log in</li></a>';
              echo '<a href="#"><li>Register</li></a>';
            }

          ?>


        </ul>

      </div>

    </div>

    <div class="section_wrap">
      <div class="section_area">
        <h1>Lumous</h1>
      </div>
    </div>

  </body>

</html>
