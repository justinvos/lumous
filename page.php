<?php

  class Page
  {
    private $title;
    private $sections;

    function Page($id)
    {
      $results = query_db('SELECT title,sections FROM pages WHERE id=' . $id);

      $row = $results[0];

      $this->title = $row['title'];
      $sections_ids = json_decode($row['sections']);
      $sections_list = array();

      for($i = 0; $i < sizeof($sections_ids); $i++)
      {
        array_push($sections_list, new Section($sections_ids[$i]));
      }

      $this->sections = $sections_list;
    }

    function get_title()
    {
      return $this->title;
    }

    function get_sections()
    {
      return $this->sections;
    }
  }

?>
