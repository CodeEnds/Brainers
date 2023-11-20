<?php
require_once 'DB_config.php';

class DB_connect extends DB_config {
    private static $db;

    protected function __construct() { 
        try {
            $host = $this->host;
            $user = $this->user;
            $pass = $this->pass;
            $database = $this->database;
            $port = $this->port;
            $PDO = (isset($port)) 
            ? new PDO("mysql:host=$host;dbname=$database", $user, $pass, $port) 
            : new PDO("mysql:host=$host;dbname=$database", $user, $pass);
            self::$db = $PDO;
        } catch (PDOException $e) {
            
        }
    }

    public static function getDB() {
        if(!isset(self::$db)) {
            new DB_connect();
        }
        return self::$db;
    }

}