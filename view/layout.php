  <?php


  /* ============== HEADER ============== */
  include_once __DIR__ . '/_header.php'; ?>



  <?php
  /* =============== BANNIERE ============== */
  include_once __DIR__ . '/_banniere.php';

  ?>



  <!-- =============== CONTENU ============== -->
  <main class="container d-flex flex-wrap justify-content-center ">
  <h3 class="mt-5"><?= $title ?></h3>
    <section class="d-flex justify-content-center align-items-center w-100 mt-4 flex-wrap">
     

      <!--   on travaille avec une variable pour insérer le bon contenu-->
      <?= $content ?>

  </main>
  </section>


  <?php


  /* ============== FOOTER ============== */
  include_once __DIR__ . '/_footer.php';
