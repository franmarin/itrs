<?php

namespace ITRS;

use ITRS\ConnectionFactory;

/**
 * Service class to get information about the front-page menu from database.
 *
 * @author fhernandez
 */
class Menu {
    const DATABASE_TABLE = 'menu';

    /**
     * Returns the list of menu items from database.
     * 
     * @return associative array
     */
    public static function getRawMenuItems()
    {
        $resource = ConnectionFactory::getConnection()->query('SELECT * FROM ' . static::DATABASE_TABLE . ' ORDER BY id');
        $result = [];
        while ($row = $resource->fetch_object()) {
            array_push($result, $row);
        }
        return $result;
    }

}
