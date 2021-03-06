<?php
/* ========== HEADER =========== */
include_once './view/header.html';
require_once './entity/Movie.php';
require_once './entity/Category.php';



$movie = new Movie([
  'id' => 1,
  'title' => 'Avatar',
  'description' => 'Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre.',
  'director' => 'James Cameron',
  'release_date' => '2009-12-16',
  'image_url' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTA4nJB9z9llRSjgDa4SrU-Jwtb-3dwzkt90rF7KkCka1H90HDt',
  'category_id' => '1'
]);



?>

<main>

  <!--  ========================= BANNIERE ============================= -->

  <div class="banniere">
    <h3 class="slogan">Découvrez et partagez des films !</h3>
  </div>


  <!--  ========================= CARDS ============================= -->

  <section class="d-flex justify-content-center align-items-center w-100 mt-5 flex-wrap">

    <article class="m-3">
      <div class="card">
        <img src="https://www.telerama.fr/sites/tr_master/files/ea70fd04-d87a-40ef-8fad-ba3cce3d94ea_2.jpg" class="card-img-top" alt="affiche film avatar">
        <div class="card-body">
          <h5 class="card-title"><?= $movie->getTitle() ?></h5>
          <div class="d-flex justify-content-center align-items-baseline">
            <h6 class="card-director mb-2"><?= $movie->getDirector() ?></h6>
            <h6 class="card-subtitle mb-2">Science-Fiction</h6>
          </div>
          <h6 class="card-date mb-2"><?= $movie->getRelease_date() ?></h6>
          <p class="card-text"><?= $movie->getDescription() ?></p>
          <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="supprimer"></i></a>
          <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-placement="top" title="éditer">
            </i></a>
        </div>
      </div>
    </article>

    <article class="m-3">
      <div class="card">
        <img src="https://m.media-amazon.com/images/I/8129a7-9A7L._AC_SL1500_.jpg" class="card-img-top" alt="affiche film avatar">
        <div class="card-body">
          <h5 class="card-title">Titanic</h5>
          <div class="d-flex justify-content-center align-items-baseline">
            <h6 class="card-director mb-2">James Cameron</h6>
            <h6 class="card-subtitle mb-2">Drame</h6>
          </div>
          <h6 class="card-date mb-2">21/01/2007</h6>
          <p class="card-text">En 1997, l'épave du Titanic est l'objet d'une exploration fiévreuse, menée par des chercheurs de trésor en quête d'un diamant bleu qui se trouvait à bord. Frappée par un reportage télévisé, l'une des rescapées du naufrage, âgée de 102 ans, Rose DeWitt, se rend sur place et évoque ses souvenirs. 1912. Fiancée à un industriel arrogant, Rose croise sur le bateau un artiste sans le sou.</p>
          <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="supprimer"></i></a>
          <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-placement="top" title="éditer">
            </i></a>
        </div>
      </div>
    </article>



  </section>


</main>






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>

</html>