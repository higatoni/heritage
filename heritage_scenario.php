<?php
    spl_autoload_register("monChargeur"); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

    function monChargeur($classe)
    {
      require $classe.".php"; // On inclut la classe correspondante au paramètre passé.
    }
    $rectangle = new parallelogramme(5,10);
    echo $rectangle->getPerimetre();
    echo $rectangle->getAire();

    $carre = new carre(100);
    echo $carre->getPerimetre();
    echo $carre->getAire();
?>