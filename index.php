<?php

class Genre
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function getGenreName()
    {
        return $this->name;
    }
}
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
    
    public function getMovieDetails()
    {


        $genreNames = array_map(function($genre) {
            return $genre->getGenreName();
        }, $this->filmGenres);

        $genres = implode(", ", $genreNames);
        return "Movie: {$this->movieName},
                Directed by: {$this->filmDirector}, 
                Released in: {$this->releaseYear}, 
                Genres: {$genres}";

    }

    public function updateGenres($newGenres) {
        $this->filmGenres = $newGenres;

    }
}

$animation = new Genre("animazione");
$family = new Genre("famiglia");
$musical = new Genre("musical");
$adventure = new Genre("avventura");
$comedy = new Genre("commedia");
$drama = new Genre("dramma");

$movies = [
    new Movie(  "Topolino",
                "Mickey Mouse", 
                2023,
                [$animation, $family]
            ),

    new Movie(  "Frozen", 
                "Jennifer Lee",
                2013,
                [$animation, $musical]
            ),

    new Movie(  "The Lion King",
                "Jon Favreau", 
                2019,
                [$adventure, $drama]
            ),

    new Movie(  "Moana",
                "Ron Clements",
                2016,
                [$animation, $adventure]
            ),

    new Movie(  "Toy Story",
                "John Lasseter",
                1995,
                [$animation, $comedy]
            ),

    new Movie(  "Zootopia",
                "Byron Howard",
                2016,
                [$animation, $adventure, $comedy]
            ),

    new Movie(  "Aladdin",
                "Guy Ritchie",
                2019,
                [$adventure, $comedy]
            ),

    new Movie(  "Mulan", 
                "Niki Caro", 
                2020,
                [$adventure, $drama]
            ),
];




// foreach ($movies as $movie) {
//     echo $movie->getMovieDetails();
// }



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

                <h1><strong>DISNEY MOVIE LIST:</strong></h1>

                <ul class="list-group">

                <?php
                foreach ($movies as $movie) {

                echo '<li class="list-group-item">' . $movie->getMovieDetails() . '</li>';

                }?>

            </ul>

        </div>

    </main>

</body>

</html>