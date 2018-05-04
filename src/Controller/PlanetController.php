<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/05/18
 * Time: 11:17
 */

namespace Controller;

use Model\PlanetManager;

class PlanetController extends AbstractController
{
    public function listPlanet()
    {
    $planetManager = new PlanetManager();
    $planets = $planetManager->selectAll();
    return $this->twig->render('Planet/list.html.twig', ['planets' => $planets]);
    }
}