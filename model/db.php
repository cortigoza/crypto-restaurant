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

    public function getCampaigns() {
        $connect = parent::connect();
        $sql = "SELECT * FROM campaigns";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getBookings() {
        $connect = parent::connect();

        $sql = "SELECT * FROM bookings";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getPayments() {
        $connect = parent::connect();

        $sql = "SELECT * FROM payments";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getSales() {
        $connect = parent::connect();

        $sql = "SELECT * FROM sales";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getBooking($idUser) {
        $connect = parent::connect();

        $sql = "SELECT * FROM bookings WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getPayment($idUser) {
        $connect = parent::connect();

        $sql = "SELECT * FROM payments WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getSale($idUser) {
        $connect = parent::connect();

        $sql = "SELECT * FROM sales WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

}
