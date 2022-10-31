<!-- ========================= FORMULAIRE PUBLIER FILM ============================ -->

<?php
// recup toutes les categories pour le choix ds select 
$catController = new CategoryController();
$allCat = $catController->getAllCategorys();
?>


<form method="POST" class="form">

  <div class="form-floating m-5">
    <input type="text" name="title" class="form-control" id="title" placeholder="titre du film" autocomplete="off">
    <label for="floatingInput" class="label_placeholder ">Entrez le titre du film</label>
  </div>
  <div class="form-floating m-5">
    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2" class="label_placeholder">Entrez le résumé du film</label>
  </div>
  <div class="form-floating m-5">
    <input type="url" name="image_url" class="form-control" id="imageUrl" placeholder="image du film" autocomplete="off">
    <label for="floatingInput" class="label_placeholder">Entrez le l'image du film</label>
  </div>
  <div class="form-floating m-5">
    <input type="date" name="release_date" class="form-control" id="releaseDate" placeholder="date du film" autocomplete="off">
    <label for="floatingInput" class="label_placeholder label_date">Entrez la date de sortie du film</label>
  </div>
  <div class="form-floating m-5">
    <input type="text" name="director" class="form-control" id="director" placeholder="réalisateur" autocomplete="off">
    <label for="floatingInput" class="label_placeholder ">Entrez le réalisateur du film</label>
  </div>
  <div class="form-floating m-5">
    <select name="category_id" class="form-control" id="category" placeholder="catégorie du film" autocomplete="off">
      <option value="" selected></option>
      <?php foreach ($allCat as $cat) : ?>
        <option value="<?= $cat->getId() ?>"><?= $cat->getCategory() ?></option>
      <?php endforeach ?>
    </select>
    <label for="floatingInput" class="label_placeholder"> Séléctionnez la catégorie du film <i class="fa-solid fa-arrow-up-right-from-square"></i> </label>
  </div>
  <input type="submit" value="Ajouter" class="btn btnPublish">

</form>