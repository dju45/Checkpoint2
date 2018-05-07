<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/05/18
 * Time: 11:32
 */

namespace Model;


class MovieManager extends AbstractManager
{
    const TABLE = 'movie';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}