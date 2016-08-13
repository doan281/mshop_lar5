<?php

namespace App\Repositories;

use LaraParse\Repositories\AbstractParseRepository;
use App\Repositories\Contracts\ShopRepository;

class ParseShopRepository extends AbstractParseRepository implements ShopRepository
{

    /**
     * Specify Parse Class name
     *
     * @return string
     */
    public function getParseClass()
    {
        return 'Shop';
    }
}
