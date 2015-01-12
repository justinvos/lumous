<?php

  function create_head()
  {
    $text = '<div class="head_wrap">';

    $text = $text . '<div class="head_area">';

    $text = $text . '<a href="#"><h2>Lumous</h2></a>';

    $text = $text . create_nav();

    $text = $text . '<h1>' . $GLOBALS['title'] . '</h1>';

    $text = $text . '</div>';

    $text = $text . '</div>';

    return $text;
  }

  function create_nav()
  {
    $text = '<ul>';

    $text = $text . '<a href="#"><li>Home</li></a>';
    $text = $text . '<a href="#"><li>Log in</li></a>';
    $text = $text . '<a href="#"><li>Register</li></a>';

    $text = $text . '</ul>';

    return $text;
  }

  function create_menu($array)
  {
    $key_array = array_keys($array);

    $text = '<ul class="menu_list">';

    $i = 0;
    while($i < sizeof($key_array))
    {
      $text = $text . '<a href="' . $array[$key_array[$i]] . '"><li>' . $key_array[$i] . '</li></a>';

      $i++;
    }

    $text = $text . '</ul>';

    return $text;
  }

  function create_section($id, $content)
  {
    $text = '<div class="section_wrap" id="' . $id . '">';

    $text = $text . '<div class="section_area">';

    $text = $text . $content;

    $text = $text . '</div>';

    $text = $text . '</div>';

    return $text;
  }

?>


<html>

  <head>

    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>

    <?php

      onLoad();

    ?>

  </body

</html>
