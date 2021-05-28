<?php
class Connects
{
    protected $dbh;

    protected function connect()
    {
        try {
            $connected = $this->dbh = new PDO("mysql:local=localhost;dbname=crypto-restaurant", "root", "root");
            return $connected;
        } catch (Exception $e) {
            var_dump("Error bd:" . $e->getMessage() . "<br>");
        }
    }
}
