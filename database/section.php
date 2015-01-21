<?php

  class Section
  {
    public $title;
    public $name;
    public $content;
    public $style;

    function Section($row)
    {
      //$results = $database->query('SELECT title,name,content,style  FROM sections WHERE id=' . $id);

      //$row = $results[0];

      $this->title = $row['title'];
      $this->name = $row['name'];
      $this->content = $row['content'];
      $this->style = $row['style'];
    }

    function get_title()
    {
      return $this->title;
    }

    function get_name()
    {
      return $this->name;
    }

    function get_content()
    {
      return $this->content;
    }

    function get_style()
    {
      return $this->style;
    }
  }


?>
