<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- !!!!!!!!! pour pointer la feuille de style sur plusieurs fichiers php bien partir de localhost -->
  <link rel="stylesheet" href="/styles/main.css">
  <title>Bon Ciné</title>
</head>

<body>

  <!--  ========================= HEADER ============================= -->

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <p class="header__title">BonCiné.com</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--     c est le me-auto qui pousse a droite   -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!--  isCurrentUrl pour ajouter la classe active sur le lien en cours -->

            <li class="nav-item <?= isCurrentUrl('/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/index.php'); ?>">
              <a class="nav-link" href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/index.php">Accueil</a>
            </li>
            <li class="nav-item   <?= isCurrentUrl('/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/createMovie.php'); ?>">
              <a class="nav-link" href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/createMovie.php">Ajouter un film</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <!--  affichage conditioné à la connexion -->
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] !== null) : ?>
              <li class="nav-item">
                <a class="nav-link" href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/User/loginUser.php">Bienvenu <?= $_SESSION['username']  ?> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/User/logoutUser.php">Se déconnecter </a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/User/loginUser.php">Se connecter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/studi/exo_php/lives/Chris_CHEVALIER/allocine.com/View/User/createUser.php">S'inscrire</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>