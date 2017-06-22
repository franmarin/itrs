<?php

namespace ITRS;

use ITRS\ConnectionInterface;
use mysqli;
use Exception;

/**
 * DAO class to connect and query tables from a MySQL database.
 *
 * @author fhernandez
 */
class MySQLConnection implements ConnectionInterface {
    private $connection;

    public function __construct($host, $username, $password, $database)
    {
        $this->connection = new mysqli($host, $username, $password, $database);
        if ($this->connection->connect_error) {
            throw new Exception ('MySQL connection could not be established.');
        }
    }

    /**
     * Returns the result of running the given query against a MySQL database.
     * 
     * @param string $query
     * @return associative array
     */
    public function query($query)
    {
        return $this->connection->query($query);
    }

}
