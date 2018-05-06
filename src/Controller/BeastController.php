<?php
/**
* Created by PhpStorm.
* User: wcs
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;

use Model\BeastManager;
use Model\MovieManager;
use Model\PlanetManager;

/**
* Class ItemController
*/
class BeastController extends AbstractController
{

  /**
  * Display item listing
  *
  * @return string
  */
  public function list()
  {
    $beastsManager = new BeastManager();
    $beasts = $beastsManager->selectAll();
    return $this->twig->render('Beast/list.html.twig', ['beasts' => $beasts]);
  }

  /**
  * Display item informations specified by $id
  *
  * @param int $id
  *
  * @return string
  */
  public function details(int $id)
  {
    $beatManager = new BeastManager();
    $beat = $beatManager->selectOneById($id);
    $movie =$beatManager->selectMovieById($id);
    $movie =$movie['title'];
    $planet = $beatManager->selectPlanetById($id);
    $planet = $planet ['name'];

    return $this->twig->render('Beast/details.html.twig', ['beat' => $beat, 'movie' => $movie, 'planet' => $planet]);
  }

  /**
  * Display item creation page
  *
  * @return string
  */
  public function add()
  {


        $beastManager = new BeastManager();
        $planetManager = new PlanetManager();
        $planets = $planetManager->selectAll();
        $movieManager = new MovieManager();
        $movies = $movieManager->selectAll();
        if (!empty($_POST)) {
            $data = $_POST;
            $beastManager->addBeast($data);
        }

    return $this->twig->render('Beast/add.html.twig',['planets' => $planets, 'movies' => $movies]);
  }

  /**
  * Display item creation page
  *
  * @return string
  */
  public function edit($id)
  {

      $beastManager = new BeastManager();
      $beast = $beastManager->selectOneById($id);
      $planetManager = new PlanetManager();
      $planets = $planetManager->selectAll();
      $movieManager = new MovieManager();
      $movies = $movieManager->selectAll();

      if (!empty($_POST)) {
          $data = $_POST;
          $beastManager->editBeast($id, $data);
          header('Location: /beasts');
      }

    return $this->twig->render('Beast/edit.html.twig',['planets' => $planets, 'movies' => $movies, 'beast' => $beast]);
  }
}
