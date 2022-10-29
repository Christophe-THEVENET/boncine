<?php

require_once __DIR__ . '/../DatabaseConnect.php';


class MoviesController
{

    use DatabaseConnect; // connexion BDD

       

  // ------------------------- RECUPERER TOUS LES FILMS ------------------------------

  public function getAllMovies(): array
  {
    $stm = $this->pdo->query("SELECT * FROM movie ORDER BY release_date DESC");
    $movies = [];
    while ($data = $stm->fetch(PDO::FETCH_ASSOC)) {
      $movies[] = new Movie($data);
    }
    require_once __DIR__ . '/../index.php';
    return $movies;
  }
}






