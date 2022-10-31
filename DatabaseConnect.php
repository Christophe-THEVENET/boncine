<?php

require_once __DIR__ . '/env.php';

// ------------------ CONNEXION BDD -----------------------

trait DatabaseConnect
{
  private $pdo = null;

  public function __construct()
  {
    try {
      // connexion
      $this->pdo = new PDO('mysql:host=localhost;charset=utf8mb4;dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
      exit('Erreur : ' . $e->getMessage());
    }
  }
}
