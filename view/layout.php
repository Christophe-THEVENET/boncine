  <?php



  /* ============== HEADER ============== */
  include_once __DIR__ . '/_header.php'; ?>


<!-- =============== TITLE ============== -->
  <h2 class="text-center my-5"><?= $title ?></h2>


  <?php
  /* =============== BANNIERE ============== */
  include_once __DIR__ . '/_banniere.php';

  ?>



  <!-- =============== CONTENU ============== -->
  <main class="container d-flex flex-wrap justify-content-center ">
    <section class="d-flex justify-content-center align-items-center w-100 mt-5 flex-wrap">

      <!--   on travaille avec une variable pour insérer le bon contenu-->
      <?= $content ?>

  </main>
  </section>


  <?php


  /* ============== HEADER ============== */
  include_once __DIR__ . '/_footer.php';
