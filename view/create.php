<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/main.css">
  <title>Bon Ciné</title>
</head>

<body>

  <header>

    <div class="header__title">
      <h1>BonCiné.com</h1>
    </div>

    <div class="header__nav d-flex justify-content-end">
      <nav class="navbar navbar-expand-lg ">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="custom-toggler navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/view/create.php">Publier un
                film</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

  </header>




  <main>

    <h3 class="mt-5">Publier un nouveau film</h3>

    <form action="#" method="GET" class="contanier-fluid w-50">

      <div class="form-floating m-5 col-md-6">
        <input type="text" name="title" class="form-control" id="title" placeholder="titre du film" autocomplete="off">
        <label for="floatingInput" class="label_placeholder ">Entrez le titre du film</label>
      </div>
      <div class="form-floating m-5 col-md-6">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2" class="textarea_placeholder">Entrez le résumé du film</label>
      </div>
      <div class="form-floating m-5 col-md-6">
        <input type="url" name="imageUrl" class="form-control" id="imageUrl" placeholder="image du film" autocomplete="off">
        <label for="floatingInput" class="label_placeholder ">Entrez le l'image du film</label>
      </div>
      <div class="form-floating m-5 col-md-6">
        <input type="date" name="releaseDate" class="form-control" id="releaseDate" placeholder="date du film" autocomplete="off">
        <label for="floatingInput" class="label_placeholder ">Entrez la date de sortie du film</label>
      </div>
      <div class="form-floating m-5 col-md-6">
        <select name="category" class="form-control" id="category" placeholder="catégorie du film" autocomplete="off">
          <option value="" selected></option>
          <option value="1">Horreur</option>
          <option value="2">Comédie</option>
          <option value="3">Drame</option>
          <option value="4">Policier</option>
          <option value="5">Aventure</option>
          <option value="7">Science-fiction</option>
        </select>
        <label for="floatingInput" class="label_placeholder "> Séléctionnez la catégorie du film </label>
      </div>

      <input type="button" value="Publier" class="btn btn-success">

    </form>

  </main>









  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>