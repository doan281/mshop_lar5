<?php

namespace App\Repositories\Contracts;

use LaraParse\Repositories\Contracts\ParseRepository;

/**
 * Class Shop
 *
 * @method \{{rootNamespace}}ParseClasses\Shop[] all()
 * @method \{{rootNamespace}}ParseClasses\Shop[] paginate($perPage = 1);
 * @method \{{rootNamespace}}ParseClasses\Shop   create(array $data)
 * @method \{{rootNamespace}}ParseClasses\Shop   update($id, array $data)
 * @method \{{rootNamespace}}ParseClasses\Shop   delete($id)
 * @method \{{rootNamespace}}ParseClasses\Shop   find($id)
 * @method \{{rootNamespace}}ParseClasses\Shop   findBy($field, $value)
 * @method \{{rootNamespace}}ParseClasses\Shop[] near($column, $latitude, $longitude, $limit = 10)
 * @method \{{rootNamespace}}ParseClasses\Shop[] within($column, $latitude, $longitude, $distance)
 * @method \{{rootNamespace}}ParseClasses\Shop[] withinBox($column, $swLatitude, $swLongitude, $neLatitude, $neLongitude)
 */
interface ShopRepository extends ParseRepository
{
    //
}
