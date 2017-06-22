<?php

namespace ITRS;

/**
 * Service class to get information about the available courses from databse.
 *
 * @author fhernandez
 */
class CourseAgenda {
    const DATABASE_TABLE = 'courses';
    const AVAILABLE_COURSE = 1;

    public static function getRawAvailableCourses()
    {
        $resource = ConnectionFactory::getMySQLConnection()->query('SELECT * FROM ' . static::DATABASE_TABLE . ' WHERE available = ' . static::AVAILABLE_COURSE);
        $result = [];
        while ($row = $resource->fetch_object()) {
            array_push($result, $row);
        }
        return $result;
    }

}
