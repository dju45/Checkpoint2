<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 * Class BeastManager
 * @package Model
 */
class BeastManager extends AbstractManager
{
    const TABLE = 'beast';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectMovieById($id)
    {
        $statement = $this->pdoConnection->prepare("SELECT movie.title FROM `$this->table` JOIN movie ON beast.id_movie = movie.id WHERE beast.id = :id");
        $statement->setFetchMode(\PDO::FETCH_ASSOC);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();

    }

    public function selectPlanetById($id)
    {
        $statement = $this->pdoConnection->prepare("SELECT planet.name FROM `$this->table` JOIN planet ON beast.id_planet = planet.id WHERE beast.id = :id");
        $statement->setFetchMode(\PDO::FETCH_ASSOC);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();

    }

    public function addBeast(array $data)
    {

        $query = "INSERT INTO $this->table (name, picture, size, area, id_movie, id_planet) VALUES (:name, :picture, :size, :area, :movies, :planet)";
        $statement = $this->pdoConnection->prepare($query);
        $statement->bindValue('name', $data['name']);
        $statement->bindValue('picture', $data['picture']);
        $statement->bindValue('size', (int)$data['size']);
        $statement->bindValue('area', $data['area']);
        $statement->bindValue('movies', (int)$data['movie']);
        $statement->bindValue('planet', (int)$data['planet']);

        $statement->execute();

    }

}
