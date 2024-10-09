<?php

class Movie
{
    public $movieName;
    public $filmDirector;
    public $releaseYear;
    public $filmGenres;
    public $poster;

    function __construct($movieName, $filmDirector, $releaseYear, $filmGenres, $poster)
    {
        $this->movieName = $movieName;
        $this->filmDirector = $filmDirector;
        $this->releaseYear = $releaseYear;
        $this->filmGenres = $filmGenres;
        $this->poster = $poster;
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
}