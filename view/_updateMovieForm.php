<!-- ========================= FORMULAIRE MOFIDER UN FILM ============================ -->
<?php
// recup toutes les categories pour le choix ds select 
$catController = new CategoryController();
$allCat = $catController->getAllCategorys();
?>


<form method="POST" class="form">

  <div class="form-floating m-5">
    <input type="text" name="title" class="form-control " id="title" placeholder="" autocomplete="off" value="<?= $movie->getTitle() ?>">
    <label for="floatingInput" class="label_placeholder">Titre</label>
  </div>
  <div class="form-floating m-5">
    <textarea class="form-control" name="description"  placeholder="Leave a comment here" id="floatingTextarea2"><?= $movie->getDescription() ?></textarea>
    <label for="floatingTextarea2" class="label_placeholder">résumé</label>
  </div>
  <div class="form-floating m-5">
    <input type="url" name="image_url" class="form-control" id="imageUrl" placeholder="image du film"  value="<?= $movie->getImage_url()?>"autocomplete="off">
    <label for="floatingInput" class="label_placeholder">image</label>
  </div>
  <div class="form-floating m-5">
    <input type="date" name="release_date" class="form-control" id="releaseDate" placeholder="date du film" value="<?= $movie->getRelease_date()?>"autocomplete="off">
    <label for="floatingInput" class="label_placeholder">date de sortie</label>
  </div>
  <div class="form-floating m-5">
    <input type="text" name="director" class="form-control" id="director" placeholder="réalisateur"  value="<?= $movie->getDirector()?>"autocomplete="off">
    <label for="floatingInput" class="label_placeholder ">réalisateur</label>
  </div>
  <div class="form-floating m-5">
    <select name="category_id" class="form-control" id="category" placeholder="catégorie du film" autocomplete="off">
      <option value="" selected><?= $category->getCategory()?></option>
      <?php foreach ($allCat as $cat) : ?>
        <option value="<?= $cat->getId() ?>"><?= $cat->getCategory() ?></option>
      <?php endforeach ?>
    </select>
    <label for="floatingInput" class="label_placeholder">catégorie du film <i class="fa-solid fa-arrow-up-right-from-square"></i>  <i class="bi bi-box-arrow-down-right"></i> </label>
  </div>
  <input type="submit" value="Modifez" class="btn btnPublish">

</form>