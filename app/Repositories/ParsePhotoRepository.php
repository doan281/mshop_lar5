<?php

namespace App\Repositories;

use LaraParse\Repositories\AbstractParseRepository;
use App\Repositories\Contracts\PhotoRepository;

class ParsePhotoRepository extends AbstractParseRepository implements PhotoRepository
{

    /**
     * Specify Parse Class name
     *
     * @return string
     */
    public function getParseClass()
    {
        return 'Photo';
    }
}
