<?php

namespace Akipe\ExampleFormeMultiple\Graphique\Simple;

use Akipe\ExampleFormeMultiple\Graphique\IGraphique;

class Cercle implements IGraphique
{
  public function __construct(
    private Point $centre,
    private Point $pointCercle,
  )
  {}

  public function dessiner() { }

  public function deplacer(int $x, int $y) { }

  public function effacer() { }
}