<?php

session_start();


require_once __DIR__ . '/../function.php';

$moviesController = new MoviesController();
$movie = $moviesController->getMovieById($_GET['id']);

$categoryController = new CategoryController();
$category = $categoryController->getCategoryById($movie->getCategory_id());


if ($_POST) {
  $movie->hydrate($_POST);
  $moviesController->updateMovie($movie);


  echo "
  <script>
    window.location.href = './../index.php'
  </script>";
}

$title = "Modifier {$movie->getTitle()}  ";


// ********* TEMPLATE CREATION D'UN ARTICLE **************



ob_start();


// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once __DIR__ . '/_updateMovieForm.php';


/* var_dump($articles); */

$content = ob_get_clean();

require_once __DIR__ . '/layout.php';

