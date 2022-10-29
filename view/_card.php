<!--  ================ CARDS ====================== -->



<article class="m-3">
  <div class="card">
    <img src="<?= $movie->getImage_url() ?>" class="card-img-top" alt="affiche film avatar">
    <div class="card-body">
      <h5 class="card-title"><?= $movie->getTitle() ?></h5>
      <div class="d-flex justify-content-center align-items-baseline">
        <h6 class="card-director mb-2"><?= $movie->getDirector() ?></h6>
        <h6 class="card-subtitle mb-2">Science-Fiction</h6>
      </div>
      <h6 class="card-date mb-2"><?= $movie->getRelease_date() ?></h6>
      <p class="card-text"><?= $movie->getDescription() ?></p>
      <a href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/deleteMovie.php?id=<?= $movie->getId() ?>" class="btn btn-danger"><i class="fa-solid fa-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="supprimer"></i></a>
      <a href="updateMovie.php" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-placement="top" title="éditer">
        </i></a>
    </div>
  </div>
</article>


