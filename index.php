<!-- 
Create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


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


$movie1 = new Movie("Matrix", "1999", "action", "English" );

$movie2 = new Movie("Narnia", "2005", "fantasy", "English");

$movie3 = new Movie("Star Wars", "1977", "space opera", "English");




var_dump($movie1);
var_dump($movie2);
var_dump($movie3);


?>



