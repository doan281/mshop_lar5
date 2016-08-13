<?php

namespace App\Repositories\Contracts;

use LaraParse\Repositories\Contracts\ParseRepository;

/**
 * Class Photo
 *
 * @method \{{rootNamespace}}ParseClasses\Photo[] all()
 * @method \{{rootNamespace}}ParseClasses\Photo[] paginate($perPage = 1);
 * @method \{{rootNamespace}}ParseClasses\Photo   create(array $data)
 * @method \{{rootNamespace}}ParseClasses\Photo   update($id, array $data)
 * @method \{{rootNamespace}}ParseClasses\Photo   delete($id)
 * @method \{{rootNamespace}}ParseClasses\Photo   find($id)
 * @method \{{rootNamespace}}ParseClasses\Photo   findBy($field, $value)
 * @method \{{rootNamespace}}ParseClasses\Photo[] near($column, $latitude, $longitude, $limit = 10)
 * @method \{{rootNamespace}}ParseClasses\Photo[] within($column, $latitude, $longitude, $distance)
 * @method \{{rootNamespace}}ParseClasses\Photo[] withinBox($column, $swLatitude, $swLongitude, $neLatitude, $neLongitude)
 */
interface PhotoRepository extends ParseRepository
{
    //
}
