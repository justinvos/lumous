<?php


  function query_db($mysql_statement)
  {
    $connection = new PDO("mysql:host=" . $GLOBALS['db_host'] . ";dbname=" . $GLOBALS['db_name'], $GLOBALS['db_username'], $GLOBALS['db_password']);
    $stmt = $connection->query($mysql_statement);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $connection = null;

    return $results;
  }



  /*$stmt = $connection->query('SELECT * FROM pages');
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  print($results[0]['title']);
  for($i = 0; $i < sizeof($results); $i++)
  {
    echo $results[0]->{"title"};
  }*/
?>
