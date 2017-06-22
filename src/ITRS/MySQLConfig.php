<?php

namespace ITRS;

/**
 * Config class to save MySQL credentials to establish a database connection.
 *
 * @author fhernandez
 */
class MySQLConfig {
    const DATABASE_FILENAME = 'database.json';

    public function __construct() {
        $databaseCredentialsFilePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . static::DATABASE_FILENAME;
        $jsonDatabaseCredentials = file_get_contents($databaseCredentialsFilePath);
        $this->setParams(json_decode($jsonDatabaseCredentials));
    }

    private function setParams($params) {
        $this->database = $params->database;
        $this->username = $params->username;
        $this->password = $params->password;
        $this->host = $params->host;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getDatabase()
    {
        return $this->database;
    }

}
