<?php

require_once __DIR__ . '/../../function.php';

$userController = new UserController();


if ($_POST) {

  if ($_POST['password'] === $_POST['confirmPassword']) {
    $userController->subscribe($_POST['username'], $_POST['password']);
    session_start();
    $_SESSION['username'] = $_POST['username'];
  } else {
    echo '<p>le mot de passe ne correspond pas</p>';
  }


  echo "
  <script>
    window.location.href = './../../index.php'
  </script>";
}

$title = 'S\'inscrire';


// ********* TEMPLATE CREATION D'UN USER **************



ob_start();




// mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

require_once __DIR__ . '/_createUserForm.php';




$content = ob_get_clean();

require_once __DIR__ . '/../layout.php';
