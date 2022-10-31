<?php

require_once __DIR__ . '/../DatabaseConnect.php';


class CategoryController {

  use DatabaseConnect; // connexion BDD


 // ------------------------- RECUPERER 1 CATEGORY PAR ID ------------------------------

 public function getCategoryById(int $id):Category
 {
   $req = $this->pdo->prepare("SELECT * FROM category WHERE  id = :id");
   $req->bindParam(":id", $id, PDO::PARAM_INT);
   $req->execute();
   $data = $req->fetch(PDO::FETCH_ASSOC);
   return new Category($data);
 }


  // ------------------------- RECUPERER TOUTE LES CATEGORY ------------------------------

  public function getAllCategorys(): array
  {
    $stm = $this->pdo->query("SELECT * FROM category");
    $categorys = [];
    while ($data = $stm->fetch(PDO::FETCH_ASSOC)) {
      $categorys[] = new Category($data);
    }
    return $categorys;
  }



}



