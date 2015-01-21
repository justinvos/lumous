<?php

  class Page
  {
    private $title;
    private $section_ids;
    private $sections;

    function Page($db, $id)
    {
      $row = $db->get_page($id);

      $this->title = $row['title'];
      $section_ids = json_decode($row['sections']);
      $this->section_ids = $section_ids;

      $this->sections = array();

      $i = 0;

      while($i < sizeof($section_ids))
      {
        array_push($this->sections, new Section($db->get_section($section_ids[$i])));

        $i = $i + 1;
      }
    }

    function get_title()
    {
      return $this->title;
    }

    function get_section_ids()
    {
      return $this->section_ids;
    }

    function get_sections()
    {
      return $this->sections;
    }
  }

?>
