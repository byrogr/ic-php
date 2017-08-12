<?php
require 'vendor/autoload.php';

use ci\classes\ConsolaIC2;
use ci\classes\Sonic;
use ci\classes\Fifa;

echo '<h3>Inyeccion de Dependencia en los metodos</h3>';

$sonic = new Sonic('medio');
$fifa = new Fifa('avanzado');
$consola = new ConsolaIC2();

echo '<br>';
echo $consola->jugar($sonic);
echo '<br>';
echo $consola->jugar($fifa);