<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Shop
 *
 * @package LaraParse
 */
class Shop extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Shop';
}