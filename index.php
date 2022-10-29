<?php

require_once __DIR__ . '/function.php';


$movieController = new MoviesController();
$movies = $movieController->getAllMovies();



// ********* TEMPLATE LISTE DES FILMS **************

$title = null;


ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

// ********* TOUS LES ARTICLES **************
foreach ($movies as $movie) {
  include __DIR__ . '/View/_card.php';
}

$content = ob_get_clean();


require_once __DIR__ . '/View/layout.php';
