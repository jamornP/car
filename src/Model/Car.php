<?php
namespace App\Model;

use App\Database\Db;

class Car extends Db {

    public function getAllCar() {
        $sql = "
            SELECT *
            FROM tb_car
            ORDER BY name
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>