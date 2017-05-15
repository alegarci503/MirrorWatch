<?php
class Database
{
        //Variable global
        private static $connection;

        private static function connect()
        {
            //Creacion de variable a utilizar en la coneccion
            $server = "localhost";
            $database = "MirrorWatch";
            $username = "root";
            $password = "1234";
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
            self::$connection = null;

            try
            {
                self::$connection = new PDO("mysql:host=".$server."; dbname=".$database,$username,$password,$options);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }

        private static function desconnect()
        {
            self::$connection = null;
        }

        public static function executeRow($query, $values)
        {
            self::connect();
            $statement = self::$connection->prepare($query);
            $statement->execute($values);
            self::desconnect();
            return $statement->fetch(PDO::FETCH_BOTH);
        }

        public static function getRow($query, $values)
        {
            self::connect();
            $statement = self::$connection->prepare($query);
            $statement->execute($values);
            self::desconnect();
            return $statement->fetchAll(PDO::FETCH_BOTH);
        }
}
?>