<?php

require_once __DIR__ . '/../../function.php';

$userController = new UserController();


if ($_POST) {

// recup utilisateur objet
  $user = $userController->connect($_POST['username'], $_POST['password']);
// demarre session
  session_start();
  $_SESSION['username'] = $user->getUsername();

  echo "
  <script>
    window.location.href = './../../index.php'
  </script>";
}





$title = 'Se connecter';


// ********* TEMPLATE CREATION D'UN USER **************



ob_start();




// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once __DIR__ . '/_loginUserForm.php';




$content = ob_get_clean();

require_once __DIR__ . '/../layout.php';
