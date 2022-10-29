<?php

require_once __DIR__ . '/../function.php';



if ($_POST) {
 
  $moviesController = new MoviesController();
  $data = $_POST;
  $movie = new Movie($data);

  $moviesController->createMovie($movie);

 

  echo "
  <script>
    window.location.href = '/../index.php'
  </script>";
}

$title = 'Ajouter un film';


// ********* TEMPLATE CREATION D'UN ARTICLE **************



ob_start();


// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once __DIR__. '/_createMovieForm.php';


/* var_dump($articles); */

$content = ob_get_clean();

require_once __DIR__ . '/layout.php';






