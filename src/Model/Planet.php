<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/05/18
 * Time: 11:11
 */

namespace Model;

/**
 * Class Planet
 * @package Model
 */
class Planet
{
    /**
     * @var string
     */
    private $name;

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
    public function setName($name): void
    {
        $this->name = $name;
    }
}