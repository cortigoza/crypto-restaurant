<?php
class DB extends Connects
{
    public function Login($mail, $password)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM users WHERE mail = $mail";
        $sql = $connect->prepare($sql);
        $sql->execute();

        while ($data = $sql->fetch()) {
            if (!password_verify($password, $data['password'])) {
                return false;
            }
        }
        return $sql->fetchAll();
    }

    public function Register($data)
    {
        $connect = parent::connect();

        $sql = "INSERT INTO users (name, surname, mail, password, mobile,cedula, date_birth, id_rol, state )";
        $sql = $connect->prepare($sql);
        $sql->bindValue('name', $data['name']);
        $sql->bindValue('surname', $data['surname']);
        $sql->bindValue('mail', $data['mail']);
        $sql->bindValue('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $sql->bindValue('mobile', $data['mobile']);
        $sql->bindValue('cedula', $data['cedula']);
        $sql->bindValue('date_birth', $data['date_birth']);
        $sql->bindValue('id_rol', $data['rol']);
        $sql->bindValue('state', 1);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getCampaigns()
    {
        $connect = parent::connect();
        $sql = "SELECT * FROM campaigns";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getBookings()
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM bookings";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getPayments()
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM payments";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getSales()
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM sales";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getBooking($idUser)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM bookings WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getPayment($idUser)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM payments WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getSale($idUser)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM sales WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function insertCampaigns($data) {
        $connect = parent::connect();

        $sql = "INSERT INTO campaigns (title, title_description, discount_code, percent)";

        $sql = $connect->prepare($sql);
        $sql->bindValue('title', $data['title']);
        $sql->bindValue('title_description', $data['description']);
        $sql->bindValue('discount_code', $data['discount']);
        $sql->bindValue('percent', $data['percent']);
        $sql->execute();
        return $sql->fetchAll();
    }
}
