<?php
  $section = $page->get_sections();
?>


<html>

  <head>
    <title><?php echo $GLOBALS['title'] . " - " . $GLOBALS['short_site_name']; ?></title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">

    <style>

      .head_wrap
      {
        background: <?php echo $GLOBALS['cover']; ?>;
        background-size: 100%;
      }

    </style>
  </head>


  <body>
    <?php //echo $page_data->{"sections"}->{"About"}->{"link"}; ?>

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

        <h1><?php echo $page->get_title(); ?></h1>

      </div>

    </div>

    <div class="section_wrap menu">
      <div class="section_area">
        <ul class="menu_list">


          <?php
            echo "";
            for($i = 0; $i < sizeof($section); $i++)
            {
              echo '<a href="' . $section[$i]->name . '"><li>' . $section[$i]->title . '</li></a>';
            }
          ?>
        </ul>
      </div>
    </div>

    <?php



      for($i = 0; $i < sizeof($section); $i++)
      {
        echo '<div class="section_wrap">';
        echo '<div class="section_area">';
        echo $section[$i]->content;
        echo '</div>';
        echo '</div>';
      }

    ?>
  </body>


</html>
