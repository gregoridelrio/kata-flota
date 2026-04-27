<?php
class Flota
{
  private array $naves = [];

  public function agregarNave(Nave $nave): void
  {
    $this->naves[] = $nave;
  }

  public function naveMasViajera(): ?Nave
  {
    if (empty($this->naves)) return null;

    $maxDistancia = $this->naves[0]->getDistanciaRecorrida();
    $naveMasViajera = $this->naves[0];
    foreach ($this->naves as $nave) {
      if ($nave->getDistanciaRecorrida() > $maxDistancia) {
        $maxDistancia = $nave->getDistanciaRecorrida();
        $naveMasViajera = $nave;
      }
    }
    return $naveMasViajera;
  }

  public function navesMenosVeintePorCientoCombustible(): array
  {
    $navesMenosVeinte = [];
    foreach ($this->naves as $nave) {
      if ($nave->getCombustible() < 20) {
        $navesMenosVeinte[] = $nave;
      }
    }
    return $navesMenosVeinte;
  }
}
