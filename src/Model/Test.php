<?php
namespace App\Model;

use App\Database\Db;

class Test extends Db {
    public function getAllTest() {
        $sql = "
            SELECT 
                *
            FROM 
                tb_test
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addTest($test) {
        $sql = "
            INSERT INTO tb_test (
                name, 
                surname,
                start_date,
                start_time 
            ) VALUES (
                :name, 
                :surname,
                :start_date,
                :start_time 
            )
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($test);
        return $this->pdo->lastInsertId();
    }
}

?>