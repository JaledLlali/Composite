<?php

require_once "MusicInterface.php";
include "Playlist.php";
require_once "Song.php";
//Implementamos
function composite(){
    $dnbPlaylist = new \Composite\Playlist();
    $dnbPlaylist->addSong(new \Composite\Song('Want You', 'Kanine', 'wantyou.mp3') );
    $dnbPlaylist->addSong(new \Composite\Song('SunDown', 'Kanine', 'Sundown.mp3') );
    return $dnbPlaylist;
}
$dnbPlaylist= composite();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7ad8fded08.js" crossorigin="anonymous"></script>
    <title>Jaled's MusicPlayer</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">Jaled's MusicPlayer</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center" style = height:200px;>
        <audio controls>
            <source src="<?php echo $dnbPlaylist->play(); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
    <?php
        echo $dnbPlaylist->next() . '<br>';
    ?>

</body>
</html>