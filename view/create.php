<?php
/* ========== HEADER =========== */
include_once './header.html'
?>

<main class="d-flex flex-column justify-content-center align-items-center">

  <h3 class="publishTitle">Répertorier un nouveau film</h3>


  <!-- ========================= FORMULAIRE PUBLIER FILM ============================ -->

  <form action="#" method="POST" class="form">

    <div class="form-floating m-5">
      <input type="text" name="title" class="form-control" id="title" placeholder="titre du film" autocomplete="off">
      <label for="floatingInput" class="label_placeholder ">Entrez le titre du film</label>
    </div>
    <div class="form-floating m-5">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2" class="label_placeholder">Entrez le résumé du film</label>
    </div>
    <div class="form-floating m-5">
      <input type="url" name="imageUrl" class="form-control" id="imageUrl" placeholder="image du film" autocomplete="off">
      <label for="floatingInput" class="label_placeholder">Entrez le l'image du film</label>
    </div>
    <div class="form-floating m-5">
      <input type="date" name="releaseDate" class="form-control" id="releaseDate" placeholder="date du film" autocomplete="off">
      <label for="floatingInput" class="label_placeholder">Entrez la date de sortie du film</label>
    </div>
    <div class="form-floating m-5">
      <select name="category" class="form-control" id="category" placeholder="catégorie du film" autocomplete="off">
        <option value="" selected></option>
        <option value="1">Horreur</option>
        <option value="2">Comédie</option>
        <option value="3">Drame</option>
        <option value="4">Policier</option>
        <option value="5">Aventure</option>
        <option value="7">Science-fiction</option>
      </select>
      <label for="floatingInput" class="label_placeholder"> Séléctionnez la catégorie du film </label>
    </div>
    <input type="button" value="Publier" class="btn btnPublish">

  </form>

</main>









<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>

</html>