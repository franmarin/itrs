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

    public static function getMySQLConnection()
    {
        $mysqlConfig = new MySQLConfig();
        return new MySQLConnection($mysqlConfig->getHost(), $mysqlConfig->getUsername(), $mysqlConfig->getPassword(), $mysqlConfig->getDatabase());
    }

}
