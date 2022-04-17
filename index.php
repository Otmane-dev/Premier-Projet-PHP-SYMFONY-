<?php

require "vendor/autoload.php";


$instance = new App\calcul();

$resultat = $instance->additionner(15, 20);

var_dump($resultat);

echo "Hello Word!";
