<?php

// class Genre
// {
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function getGenreName()
//     {
//         return $this->name;
//     }
// }
// class Movie
// {
//     public $movieName;
//     public $filmDirector;
//     public $releaseYear;
//     public $filmGenres;
//     public $poster;
    


//     function __construct($movieName, $filmDirector, $releaseYear, $filmGenres, $poster)
//     {
//         $this->movieName = $movieName;
//         $this->filmDirector = $filmDirector;
//         $this->releaseYear = $releaseYear;
//         $this->filmGenres = $filmGenres;
//         $this->poster = $poster;
//     }
    
//     public function getMovieDetails()
//     {


//         $genreNames = array_map(function($genre) {
//             return $genre->getGenreName();
//         }, $this->filmGenres);

//         $genres = implode(", ", $genreNames);
//         return "Movie: {$this->movieName},
//                 Directed by: {$this->filmDirector}, 
//                 Released in: {$this->releaseYear}, 
//                 Genres: {$genres}";

//     }

//     public function updateGenres($newGenres) {
//         $this->filmGenres = $newGenres;

//     }
// }

// $animation = new Genre("animazione");
// $family = new Genre("famiglia");
// $musical = new Genre("musical");
// $adventure = new Genre("avventura");
// $comedy = new Genre("commedia");
// $drama = new Genre("dramma");

// $movies = [
//     new Movie(  "Topolino",
//                 "Mickey Mouse", 
//                 2023,
//                 [$animation, $family],
//                 "assets/img/Topolino.jpg"
//             ),

//     new Movie(  "Frozen", 
//                 "Jennifer Lee",
//                 2013,
//                 [$animation, $musical],
//                 "assets/img/frozen.jpg"
//             ),

//     new Movie(  "The Lion King",
//                 "Jon Favreau", 
//                 2019,
//                 [$adventure, $drama],
//                 "assets/img/re leone.jpg"
//             ),

//     new Movie(  "Moana",
//                 "Ron Clements",
//                 2016,
//                 [$animation, $adventure],
//                 "assets/img/moana.jpg"
//             ),

//     new Movie(  "Toy Story",
//                 "John Lasseter",
//                 1995,
//                 [$animation, $comedy],
//                 "assets/img/toystory.png"
//             ),

//     new Movie(  "Zootopia",
//                 "Byron Howard",
//                 2016,
//                 [$animation, $adventure, $comedy],
//                 "assets/img/zootopia.jpg"
//             ),

//     new Movie(  "Aladdin",
//                 "Guy Ritchie",
//                 2019,
//                 [$adventure, $comedy],
//                 "assets/img/aladin.jpeg"
//             ),

//     new Movie(  "Mulan", 
//                 "Niki Caro", 
//                 2020,
//                 [$adventure, $drama],
//                 "assets/img/mulan.jpg"
//             ),
// ];

require_once 'db.php';

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
            <h1 class="text-center my-4"><strong>DISNEY MOVIE LIST:</strong></h1>
            <div class="row">
                <?php
                foreach ($movies as $movie) {
                ?>
                    <div class="col-md-3 mb-4"> <!-- Colonna di dimensione 3 per 4 colonne nella riga -->
                        <div class="card">
                            <img src="<?php echo $movie->poster; ?>" class="card-img-top" alt="<?php echo $movie->movieName; ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $movie->movieName; ?></h5>
                                <p class="card-text"><?php echo $movie->getMovieDetails(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

</body>

</html>