<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/05/18
 * Time: 11:34
 */

namespace Controller;

use Model\MovieManager;

/**
 * Class MovieController
 * @package Controller
 */
class MovieController extends AbstractController
{
    public function list()
    {
    $movieManager = new MovieManager();
    $movies = $movieManager->selectAll();
    return $this->twig->render('Movie/list.html.twig', ['movies' => $movies]);

    }

}