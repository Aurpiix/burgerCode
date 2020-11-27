<?php

class Database {

    private static $dbHost = "localhost";
    private static $dbName = "aurpixco_burger_code";
    private static $dbUser = "aurpixco_user";
    private static $dbUserPassword = "******";

    private static $connection = null;

    public static function connect() {
        try {
            self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch (PDOException $e) {
            die($e->getMessage);
        }
        return self::$connection;
    }

    public static function disconnect() {
        self::$connection = null;
    }

}

 ?>
