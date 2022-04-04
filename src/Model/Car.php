<?php
namespace App\Model;

use App\Database\Db;

class Car extends Db {

    public function getAllCar() {
        $sql = "
            SELECT *
            FROM tb_car
            ORDER BY id
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addCar($car) {
        $sql = "
            INSERT INTO tb_car (
                id,
                name
            ) VALUES (
                NULL,
                :name
            )
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($car);
        return $this->pdo->lastInsertId();
    }
}
?>