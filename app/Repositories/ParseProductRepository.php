<?php

namespace App\Repositories;

use LaraParse\Repositories\AbstractParseRepository;
use App\Repositories\Contracts\ProductRepository;

class ParseProductRepository extends AbstractParseRepository implements ProductRepository
{

    /**
     * Specify Parse Class name
     *
     * @return string
     */
    public function getParseClass()
    {
        return 'Product';
    }
}
