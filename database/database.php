<?php

  class Database
  {
    private $host;
    private $name;
    private $username;
    private $password;

    function Database($host, $name, $username, $password)
    {
      $this->host = $host;
      $this->name = $name;
      $this->username = $username;
      $this->password = $password;
    }

    function query($mysql_statement)
    {
      $connection = new PDO("mysql:host=$this->host;dbname=$this->name", $this->username, $this->password);

      $stmt = $connection->query($mysql_statement);
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


      return $results;
    }

    function get_page($id)
    {
      $results = $this->query('SELECT title,sections FROM pages WHERE id=' . $id);

      return $results[0];
    }

    function get_section($id)
    {
      $results = $this->query('SELECT title,name,content,style FROM sections WHERE id=' . $id);

      return $results[0];
    }
  }

  $database = new Database("localhost", "lumous", "lumous", "structur3");



  /*function test_db()
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
  }

  function query_db($mysql_statement)
  {
    $connection = new PDO("mysql:host=" . $GLOBALS['db_host'] . ";dbname=" . $GLOBALS['db_name'], $GLOBALS['db_username'], $GLOBALS['db_password']);
    $stmt = $connection->query($mysql_statement);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $connection = null;

    return $results;
  }*/

  function create_tables()
  {
    $database->query("DROP table pages, sections;");
    $database->query("create table pages ( id INT(10) PRIMARY KEY AUTO_INCREMENT, title VARCHAR(140) NOT NULL, sections TEXT );");
    $database->query("create table sections ( id INT(10) PRIMARY KEY AUTO_INCREMENT, title VARCHAR(140), name VARCHAR(140), content TEXT, style TEXT );");
  }

  function insert_page($page)
  {
    $database->query("insert into pages (title, sections) VALUES (" . $page->get_title() . ", " . $page->get_sections() . ")");
  }

  function insert_section($section)
  {
    $database->query("insert into sections (title, name, content, style) VALUES (" . $section->get_title() . ", " . $section->get_name() . ", " . $section->get_content() . ", " . $section->get_style() . ")");

  }
?>
