<?php

  function test_db()
  {
    return "this is the db file";
  }

/*
  function can_connect_db()
  {
    try
    {
      $connection = new PDO("mysql:host=" . $GLOBALS['db_host'] . ";dbname=" . $GLOBALS['db_name'], $GLOBALS['db_username'], $GLOBALS['db_password']);

      return True;
    }
    catch(PDOException $e) {
      return False;
    }
  }*/

  function query_db($mysql_statement)
  {
    $connection = new PDO("mysql:host=" . $GLOBALS['db_host'] . ";dbname=" . $GLOBALS['db_name'], $GLOBALS['db_username'], $GLOBALS['db_password']);
    $stmt = $connection->query($mysql_statement);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $connection = null;

    return $results;
  }
?>
