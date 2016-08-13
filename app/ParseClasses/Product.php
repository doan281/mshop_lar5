<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Product
 *
 * @package LaraParse
 */
class Product extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Product';
}