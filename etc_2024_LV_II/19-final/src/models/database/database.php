<?php

    require 'config.php';

    class Database
    {
        public static function getConnection()
        {
            $dsn = "mysql:host=" . DB_HOST.";dbname=".DB_NAME.";charset=UTF8;";
           
            try {
                return new PDO($dsn, USER_NAME, PASSWORD, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }
    }
