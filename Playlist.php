<?php

namespace Composite;

class Playlist implements MusicInterface
{
    protected $songs = [];
    protected $currentTrack = 0;
    // Usando song desde la interfaz y añadimos la cancion al array de songs
    public function addSong(MusicInterface $song): bool
    {
          $this->songs[] = $song;

          return true;
    }
    //Llamamos al array songs en la posicion que nos diga currentTrack y ejecuta el metodo play de song.php
    public function play()
    {
        return $this->songs[$this->currentTrack]->play();
    }
    //Si hay una cancion siguiente, suma 1 a la cancion actual y devuelve play()
    public function next()
    {
        if(isset($this->songs[$this->currentTrack + 1]))
        {
            $this->currentTrack++;
            return $this->play();
        }
        return $this->play();
    }
    //Si la cancion actual es mayor que 0, resta 1 a la cancion actual y devuelve play()
    public function previous()
    {
        if($this->currentTrack > 0){
            $this->currentTrack--;

            return $this->play();
        }

        return $this->play();
    }


}
