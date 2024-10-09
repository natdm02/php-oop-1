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