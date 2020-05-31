<?php
class DB {
    private static $connection;

    private static function openConnection($dbname = NULL)
    {
        $dbhost = "mysql-server-80";
        $dbuser = "root";
        $dbpass = "root_password";
        $dbname = "web-bootcamp-db";
        
        static::$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if (static::$connection->connect_error) {
            die("Connection failed: " . static::$connection->connect_error);
        }
    }
    
    private static function closeConnection()
    {
        static::$connection->close();
    }
    
    public static function run($sql)
    { 
        if(!static::$connection) {
            static::openConnection();
        }
        $response = static::$connection->query($sql);

        static::closeConnection();

        if($response) {
           return $response;
        } else {
            die("SQL error: " . static::$connection->error . "</br>");
        }
    }
}