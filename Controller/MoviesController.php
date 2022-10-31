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


  // ------------------------- CREER FILM------------------------------

  public function createMovie(Movie $movie)
  {
    $req = $this->pdo->prepare("INSERT INTO movie (title, `description`, director, release_date, image_url, category_id) VALUES (:title, :description, :director, :release_date, :image_url, :category_id)");
    $req->bindValue(":title", $movie->getTitle(), PDO::PARAM_STR);
    $req->bindValue(":description", $movie->getDescription(), PDO::PARAM_STR);
    $req->bindValue(":director", $movie->getDirector(), PDO::PARAM_STR);
    $req->bindValue(":release_date", $movie->getRelease_date(), PDO::PARAM_STR);
    $req->bindValue(":image_url", $movie->getImage_url(), PDO::PARAM_STR);
    $req->bindValue(":category_id", $movie->getCategory_id(), PDO::PARAM_INT);
    $req->execute();
  }



  // ------------------------- SUPPRIMER FILM ------------------------------

  public function deleteMovie(int $id)
  {
    $req = $this->pdo->prepare("DELETE FROM movie WHERE  id = :id");
    $req->bindValue(":id", $id, PDO::PARAM_INT);
    $req->execute();
  }



  // ------------------------- RECUPERER 1 FILM BY ID ------------------------------

  public function getMovieById(int $id)
  {
    $req = $this->pdo->prepare("SELECT * FROM movie WHERE  id = :id");
    $req->bindParam(":id", $id, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch(PDO::FETCH_ASSOC);
    return new Movie($data);
  }




  // ------------------------- MODIFIER FILM ------------------------------

  public function updateMovie(Movie $movie)
  {
    $req = $this->pdo->prepare("UPDATE  movie SET title = :title, description = :description, director = :director, release_date = :release_date, image_url = :image_url, category_id = :category_id WHERE id = :id");
    $req->bindValue(":title", $movie->getTitle(), PDO::PARAM_STR);
    $req->bindValue(":description", $movie->getDescription(), PDO::PARAM_STR);
    $req->bindValue(":director", $movie->getDirector(), PDO::PARAM_STR);
    $req->bindValue(":release_date", $movie->getRelease_date(), PDO::PARAM_STR);
    $req->bindValue(":image_url", $movie->getImage_url(), PDO::PARAM_STR);
    $req->bindValue(":category_id", $movie->getCategory_id(), PDO::PARAM_INT);
    $req->bindValue(":id", $movie->getId(), PDO::PARAM_INT);
    $req->execute();
  }
}

