<?php

session_start();

$_SESSION = [];

session_destroy();


?>



<script>
  window.location.href = './../../index.php'
</script>;