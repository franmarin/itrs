<?php

namespace ITRS;

/**
 * Service class to save contact requests into a MySQL database.
 *
 * @author fhernandez
 */
class Contact {
    const DATABASE_TABLE = 'contact_requests';

    /**
     * Save the given contact raw data.
     * 
     * @param associative array $data
     * @return bool
     */
    public static function saveRawData($data)
    {
        $values = vsprintf("'%s', '%s', '%s', '%s'", array_values($data));
        return ConnectionFactory::getConnection()->query('INSERT INTO ' . static::DATABASE_TABLE . '(name, email, subject, comment) VALUES (' . $values . ')');
    }

}
