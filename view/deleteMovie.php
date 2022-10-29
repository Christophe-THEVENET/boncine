<?php

require_once __DIR__ . '/../function.php';


$moviesController = new MoviesController();
$moviesController->deleteMovie($_GET['id']);

?>

<script>
  window.location.href = "../index.php"
</script>

