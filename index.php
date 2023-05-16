<?php
/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
*/
class Movie {
    public $title;
    public $genres = [];
    public $release_year;
    public $producer;
    public $language;
    public $duration;

    function __construct($_title, $_genres)
    {
        $this->title = $_title;
        $this->genres = $_genres;
    }

    public function getGenresList() {
        $genresList = "";
        foreach ($this->genres as $genre) {
            $genresList .= $genre . " ";
        }
        return $genresList;
    }

    public function getProducer() {
        return $this->producer;
    }

    public function getDetails() {
        return "Title: {$this->title} <br> Genre: {$this->getGenresList()} <br> Release Year: {$this->release_year} <br> Producer: {$this->getProducer()}";
    }
}

$first_movie = new Movie("The Godfather", ["Crime", "drama", "pippo"]);
$first_movie->release_year = 1972;
$first_movie->producer = "Francis Ford Coppola";

$second_movie = new Movie("The Departed", ["Crime"]);
$second_movie->release_year = 2006;
$second_movie->producer = "Martin Scorsese";

var_dump($first_movie, $second_movie);
echo "{$first_movie->getDetails()} <br><br> {$second_movie->getDetails()}";

