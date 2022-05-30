<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/main.css">
  <title>Bon Ciné</title>
</head>

<body>

  <header>

    <div class="header__title">
      <h1>BonCiné.com</h1>
    </div>

    <!--  ========================= HEADER ============================= -->

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

    <!--  ========================= BANNIERE ============================= -->

    <div class="banniere">
      <h3 class="slogan">Découvrez et partagez des films !</h3>
    </div>


    <!--  ========================= CARDS ============================= -->


    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-warning">Go somewhere</a>
        <a href="#" class="btn btn-danger">Go somewhere</a>
      </div>
    </div>


  </main>






  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>