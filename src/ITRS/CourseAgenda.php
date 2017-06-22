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

    /**
     * Returns the raw list of available courses from database.
     * 
     * @return associative array
     */
    public static function getRawAvailableCourses()
    {
        $resource = ConnectionFactory::getConnection()->query('SELECT * FROM ' . static::DATABASE_TABLE . ' WHERE available = ' . static::AVAILABLE_COURSE);
        $result = [];
        while ($row = $resource->fetch_object()) {
            array_push($result, $row);
        }
        return $result;
    }

}
