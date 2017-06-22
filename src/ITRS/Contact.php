<?php

namespace ITRS;

/**
 * Service class to save contact requests into a MySQL database.
 *
 * @author fhernandez
 */
class Contact {
    const DATABASE_TABLE = 'contact_requests';

    public static function saveRawData($data)
    {
        $values = vsprintf("'%s', '%s', '%s', '%s'", array_values($data));
        return ConnectionFactory::getMySQLConnection()->query('INSERT INTO ' . static::DATABASE_TABLE . '(name, email, subject, comment) VALUES (' . $values . ')');
    }

}
