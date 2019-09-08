<?php

namespace Abhin\ImdbApi;

class Imdb 
{
    protected $apiKey;

    public function __construct($key)
    {
        if (is_string($key) && !empty($key)) {
            $this->apiKey = $key;
        } else {
            throw new \Exception('Imdb API key is Required');
        }

    }

    public function getMovieByTitle($title) 
    {
        return $title;
    }


}