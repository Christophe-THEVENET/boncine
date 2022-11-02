<?php


// ******************** pour charger (require) automatiquement les classes Models et Controllers ********************
function loadClasses($class)
{
  // si il y a la string Manager dans le nom de ma classe alors c'est un controleur
  if (strpos($class, 'Controller')) {
    // on retourne la classe corespondante
    require __DIR__ . "/Controller/$class.php";
  } else {
    require __DIR__ . "/Entity/$class.php";
  }
}
// charge la classe a l 'instanciation
spl_autoload_register("loadClasses");





// ******************* formater les dates en français ******************************
function formatDateInFrench($date)
{
    setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR@euro', 'fr_FR.utf8', 'fr-FR', 'fra');
    date_default_timezone_set('Europe/Paris');
    // converti la date en timestamp
    $dateTimestamp = strtotime($date);
    // pour avoir les dates en français avec l objet Intl
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE);
    //                                                     DATE                   HEURE
    return $formatter->format($dateTimestamp);
}




// ************ a joute class 'activ' si url de la page = url du lien ***********
function isCurrentUrl(string $url): ?string
{
    if ($_SERVER['REQUEST_URI'] === $url) { //$_SERVER['REQUEST_URI'] est l 'url de la page en cours
        return 'active';
    }
    return null;
}