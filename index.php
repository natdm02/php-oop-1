<?php

class Movie
{
    public $movieName;
    public $filmDirector;
    public $releaseYear;
    public $filmGenres;

    function __construct($movieName, $filmDirector, $releaseYear, $filmGenres)
    {
        $this->movieName = $movieName;
        $this->filmDirector = $filmDirector;
        $this->releaseYear = $releaseYear;
        $this->filmGenres = $filmGenres;
    }
    
    public function getMovieDetails(){
        $genres = implode(", ", $this->filmGenres);
        return "Movie: {$this->movieName}, Directed by: {$this->filmDirector}, Released in: {$this->releaseYear}, Genres: {$genres}";

    }
}

$movie = new Movie("topolino", "mickey mouse", 2023, ["animation", "family"]);



echo $movie->getMovieDetails();

?>


























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-opp-1</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--vuejs-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
</head>

<body>
    <main>
        <div class="container">

        <div class="row">
            oop-1
        </div>

        </div>
    </main>
</body>
</html>