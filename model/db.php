<?php
class DB extends Connects
{
    public function Login($mail, $password)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM users WHERE mail = :mail";
        $sql = $connect->prepare($sql);
        $sql->bindValue(':mail', $mail);
        $sql->execute();
        while ($data = $sql->fetch()) {
            if (password_verify($password, $data['password'])) {
                return $data;
            }
        }
        return false;
    }

    public function Register($data)
    {
        $connect = parent::connect();
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $type = 1;
        $sql = "INSERT INTO users 
                        VALUES(null, :name, :surname, :mail, :address, :password, :mobile,
                                :cedula, :date_birth, :id_rol, :state )";
        $sql = $connect->prepare($sql);
        $sql->bindParam(':name', $data['name']);
        $sql->bindParam(':surname', $data['surname']);
        $sql->bindParam(':mail', $data['mail']);
        $sql->bindParam(':address', $data['address']);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':mobile', $data['mobile']);
        $sql->bindParam(':cedula', $data['cedula']);
        $sql->bindParam(':date_birth', $data['date_birth']);
        $sql->bindParam(':id_rol', $data['rol']);
        $sql->bindParam(':state', $type);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getCampaigns()
    {
        $connect = parent::connect();
        $sql = "SELECT * FROM campaigns";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBookings()
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM bookings";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayments()
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM payments";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSales()
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM sales";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBooking($idUser)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM bookings WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayment($idUser)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM payments WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSale($idUser)
    {
        $connect = parent::connect();

        $sql = "SELECT * FROM sales WHERE id_user = $idUser";
        $sql = $connect->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertCampaigns($data)
    {
        $connect = parent::connect();

        $sql = "INSERT INTO campaigns   VALUES(null, :title, :title_description, :discount_code, :percent)";
        $sql = $connect->prepare($sql);
        $sql->bindParam(':title', $data['title']);
        $sql->bindParam(':title_description', $data['description']);
        $sql->bindParam(':discount_code', $data['discount']);
        $sql->bindParam(':percent', $data['percent']);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function insertProducts($data) {
        $connect = parent::connect();

        $sql = "INSERT INTO products   VALUES(null, :title, :description, :price, :photo, :state)";
        $sql = $connect->prepare($sql);
        $sql->bindParam(':title', $data['title']);
        $sql->bindParam(':description', $data['description']);
        $sql->bindParam(':price', $data['price']);
        $sql->bindParam(':photo', $data['photo']);
        $sql->bindParam(':state', $data['state']);
        $sql->execute();
        return $sql->fetchAll();
    }
}
