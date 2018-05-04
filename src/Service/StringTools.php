<?php

namespace Service;

/**
 *  class StringTools
 */
class StringTools
{

    public static function trimWhiteSpaces(string $str):string
    {
        $firstcaracter= stripos($str, '/\w/');
        $newstring = substr_replace($str, 'z', 0, $firstcaracter);
        return $newstring;
    }
}
