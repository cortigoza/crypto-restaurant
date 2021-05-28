<?php
class DB extends Connects
{
    public function Login($mail, $password) {
        $connect = parent::connect();

        $sql = "SELECT * FROM users WHERE mail = $mail AND password = $password";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }
}
