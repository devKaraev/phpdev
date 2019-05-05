<?php

class Config
{
    static  public function getConnectDb()
    {
        try
        {
            $host = 'localhost';
            $dbname = 'phpdev';
            $user = 'root';
            $password = '';
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user,$password);

            return $db;
        } catch (PDOException $e) {
                exit($e->getMassage());
        }
    }
}
