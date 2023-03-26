<?php

session_start();

require_once __DIR__ . '/function.php';

// recup tous les films
$movieController = new MoviesController();
$movies = $movieController->getAllMovies();

// recup toutes les categories
$categoryController = new CategoryController();
$categorys = $categoryController->getAllCategorys();


// ********* TEMPLATE LISTE DES FILMS **************

$title = null;


ob_start();

// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

// ********* TOUS LES ARTICLES **************


foreach ($movies as $movie) {
  //recup la category du film
  $category = $categoryController->getCategoryById($movie->getCategory_id());
  include __DIR__ . '/View/_card.php';
}

$content = ob_get_clean();


require_once __DIR__ . '/View/layout.php';

