<?php

  class Section
  {
    public $title;
    public $name;
    public $content;
    public $style;

    function Section($id)
    {
      $results = query_db('SELECT * FROM sections WHERE id=' . $id);

      $row = $results[0];

      $this->title = $row['title'];
      $this->name = $row['name'];
      $this->content = $row['content'];
      $this->style = $row['style'];
    }
  }


?>
