<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Item
 */
class Beast
{
    /**
     * @var int
     */
    private $id_planet;

    /**
     * @return int
     */
    public function getIdPlanet(): int
    {
        return $this->id_planet;
    }

    /**
     * @param int $id_planet
     * @return Beast
     */
    public function setIdPlanet(int $id_planet): Beast
    {
        $this->id_planet = $id_planet;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdMovie(): int
    {
        return $this->id_movie;
    }

    /**
     * @param int $id_movie
     * @return Beast
     */
    public function setIdMovie(int $id_movie): Beast
    {
        $this->id_movie = $id_movie;
        return $this;
    }

    /**
     * @var int
     */
    private $id_movie;
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Beast
     */
    public function setId($id): Beast
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
