<?php

require_once __DIR__ . '/../DatabaseConnect.php';

class UserController
{

  use DatabaseConnect; // connexion BDD


// ======================= REGISTER ============================
  public function subscribe(string $username, string $password): bool
  {
    try {
      $statement = $this->pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password  )');
      $statement->bindValue(':username', $username, PDO::PARAM_STR);
      $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT),  PDO::PARAM_STR);
      return $statement->execute();
    } catch (PDOException $e) {
      exit('Erreur : ' . $e->getMessage());
    }
  }


// ======================= LOGIN============================
  public function connect(string $username, string $password): User
  {
    $statement = $this->pdo->prepare('SELECT * FROM users WHERE username = :username');
    $statement->bindValue(':username',  $username);
    $statement->setFetchMode(PDO::FETCH_CLASS, 'User');
    if ($statement->execute()) {
      $user = $statement->fetch();
      if ($user !== false && password_verify($password, $user->getPassword())) {
        // On vérifie si le département de l'utilisateur est dans la liste des départements autorisés
        /*  if (in_array($user->getDepartment(), ['75', '94', '92', '93'])) {
          $user->addRole('ROLE_DELIVERABLE');
        } */
        return $user;
      }
    }

    throw new Exception('Identifiants invalides');
  }
}
