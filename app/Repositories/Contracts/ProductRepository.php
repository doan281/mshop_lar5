<?php

namespace App\Repositories\Contracts;

use LaraParse\Repositories\Contracts\ParseRepository;

/**
 * Class Product
 *
 * @method \{{rootNamespace}}ParseClasses\Product[] all()
 * @method \{{rootNamespace}}ParseClasses\Product[] paginate($perPage = 1);
 * @method \{{rootNamespace}}ParseClasses\Product   create(array $data)
 * @method \{{rootNamespace}}ParseClasses\Product   update($id, array $data)
 * @method \{{rootNamespace}}ParseClasses\Product   delete($id)
 * @method \{{rootNamespace}}ParseClasses\Product   find($id)
 * @method \{{rootNamespace}}ParseClasses\Product   findBy($field, $value)
 * @method \{{rootNamespace}}ParseClasses\Product[] near($column, $latitude, $longitude, $limit = 10)
 * @method \{{rootNamespace}}ParseClasses\Product[] within($column, $latitude, $longitude, $distance)
 * @method \{{rootNamespace}}ParseClasses\Product[] withinBox($column, $swLatitude, $swLongitude, $neLatitude, $neLongitude)
 */
interface ProductRepository extends ParseRepository
{
    //
}
