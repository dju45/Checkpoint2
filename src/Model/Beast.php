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
   private $id;

    /**
     * @var string
     */
   private $name;

    /**
     * @var string
     */
   private $picture;

    /**
     * @var int
     */
   private $size;

    /**
     * @var string
     */
   private $area;

    /**
     * @var int
     */
   private $id_movie;

    /**
     * @var int
     */
   private $id_planet;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * @param string $area
     */
    public function setArea(string $area): void
    {
        $this->area = $area;
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
     */
    public function setIdMovie(int $id_movie): void
    {
        $this->id_movie = $id_movie;
    }

    /**
     * @return int
     */
    public function getIdPlanet(): int
    {
        return $this->id_planet;
    }

    /**
     * @param int $id_planet
     */
    public function setIdPlanet(int $id_planet): void
    {
        $this->id_planet = $id_planet;
    }


}
