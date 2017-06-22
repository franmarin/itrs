<?php

namespace ITRS;

use ITRS\MySQLConfig;
use ITRS\MySQLConnection;

/**
 * Class to get a connection object to save/load data.
 *
 * @author fhernandez
 */
class ConnectionFactory {
    const MYSQL_CONNECTION = 'mysql';

    /**
     * Returns an implementation of ConnectionInterface depending on the
     * given parameter.
     * 
     * At this stage, the method only returns a MySQLConnection object 
     * regardless of the specified connection type.
     * 
     * @param string $connectionType
     * @return ConnectionInterface
     */
    public static function getConnection($connectionType = static::MYSQL_CONNECTION)
    {
        $mysqlConfig = new MySQLConfig();
        return new MySQLConnection($mysqlConfig->getHost(), $mysqlConfig->getUsername(), $mysqlConfig->getPassword(), $mysqlConfig->getDatabase());
    }

}
