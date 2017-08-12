<?php
require 'vendor/autoload.php';

use ci\classes\ConsolaIC;
use ci\classes\Sonic;
use ci\classes\Fifa;

echo '<h3>Inyeccion de Dependencia en el constructor</h3>';

$sonic = new Sonic('medio');
$fifa = new Fifa('avanzado');

$consola1 = new ConsolaIC($sonic);
$consola2 = new ConsolaIC($fifa);

echo $consola1->jugar();
echo '<br>';
echo $consola2->jugar();