<?php
class Nave
{
  private string $nombre;
  private int $combustible;
  private TipoNave $tipoNave;
  private int $distanciaRecorrida;
  private bool $averiado;

  public function __construct(string $nombre, int $combustible, TipoNave $tipoNave, int $distanciaRecorrida, bool $averiado)
  {
    $this->nombre = $nombre;
    $this->combustible = $combustible;
    $this->tipoNave = $tipoNave;
    $this->distanciaRecorrida = $distanciaRecorrida;
    $this->averiado = $averiado;
  }

  public function getNombre(): string
  {
    return $this->nombre;
  }

  public function getDistanciaRecorrida(): int
  {
    return $this->distanciaRecorrida;
  }

  public function getCombustible(): int
  {
    return $this->combustible;
  }

  public function getAveriado(): bool
  {
    return $this->averiado;
  }

  public function setAveriado(bool $averiado): void
  {
    $this->averiado = $averiado;
  }

  public function setCombustible(int $combustible): void
  {
    $this->combustible = $combustible;
  }
}
