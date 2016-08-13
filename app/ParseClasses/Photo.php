<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Photo
 *
 * @package LaraParse
 */
class Photo extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Photo';
}