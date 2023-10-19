<?php

# definisco la classe: 
class Movie 
{
    public $title;
    public $year;
    public $genre;
    public $language;
    


    function __construct($_title, $_year, $_genre, $_language)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->language = $_language;
    }

    public function getTitle()
    {
        return $this->title;
    }

   public function getYear()
    {
        return $this->year;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getLanguage()
    {
        return $this->language;
    }
}


?>