<?php

class Database
{
    protected static $connection = null;

    public static function connect()
    {
        if (self::$connection === null) {
            $config = require base_path('config/config.php');

            $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";

            self::$connection = new PDO($dsn, $config['user'], $config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
        }

        return self::$connection;
    }
}