<?php

require_once 'classes/Genre.php';
require_once 'classes/Movie.php';



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
                [$animation, $family],
                "assets/img/Topolino.jpg"
            ),

    new Movie(  "Frozen", 
                "Jennifer Lee",
                2013,
                [$animation, $musical],
                "assets/img/frozen.jpg"
            ),

    new Movie(  "The Lion King",
                "Jon Favreau", 
                2019,
                [$adventure, $drama],
                "assets/img/re leone.jpg"
            ),

    new Movie(  "Moana",
                "Ron Clements",
                2016,
                [$animation, $adventure],
                "assets/img/moana.jpg"
            ),

    new Movie(  "Toy Story",
                "John Lasseter",
                1995,
                [$animation, $comedy],
                "assets/img/toystory.png"
            ),

    new Movie(  "Zootopia",
                "Byron Howard",
                2016,
                [$animation, $adventure, $comedy],
                "assets/img/zootopia.jpg"
            ),

    new Movie(  "Aladdin",
                "Guy Ritchie",
                2019,
                [$adventure, $comedy],
                "assets/img/aladin.jpeg"
            ),

    new Movie(  "Mulan", 
                "Niki Caro", 
                2020,
                [$adventure, $drama],
                "assets/img/mulan.jpg"
            ),
];

