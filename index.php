<?php
require_once 'Nave.php';
require_once 'Flota.php';
require_once 'TipoNave.php';

$nave1 = new Nave("Nave1", 50, TipoNave::CARGA, 1000, false);
$nave2 = new Nave("Nave2", 10, TipoNave::BATALLA, 2000, false);
$nave3 = new Nave("Nave3", 5, TipoNave::EXPLORADORA, 1500, true);

$flota = new Flota();
$flota->agregarNave($nave1);
$flota->agregarNave($nave2);
$flota->agregarNave($nave3);

$naveMasViajera = $flota->naveMasViajera();
if ($naveMasViajera) {
  echo "La nave más viajera es: " . $naveMasViajera->getNombre() . " con una distancia recorrida de " . $naveMasViajera->getDistanciaRecorrida() . " años luz.\n";
} else {
  echo "No hay naves en la flota.\n";
}

$navesMenosVeinte = $flota->navesMenosVeintePorCientoCombustible();
echo "Naves con menos del 20% de combustible:\n";
foreach ($navesMenosVeinte as $nave) {
  echo "- " . $nave->getNombre() . " (combustible: " . $nave->getCombustible() . ")\n";
}
