<?php

require 'vendor/autoload.php';

use ci\classes\Consola;

$consola = new Consola();
echo $consola->jugar();
echo '<br>';
echo 'Que pasa si quiere jugar otro juego, como por ejemplo FIFA?';