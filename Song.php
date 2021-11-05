<?php

namespace Composite;

// Se implementa la interfaz base
class Song implements MusicInterface
{
    protected $title, $artist, $path;
    //Constructor del objeto song
    public function __construct(string $title, string $artist, string $path)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->path = $path;
    }
    // Implementamos play() para que nos devuelva el path de song
    public function play()
    {
        return $this->path;
    }
}