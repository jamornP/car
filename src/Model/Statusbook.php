<?php 
namespace App\Model;

use App\Database\Db;

class Statusbook extends Db {
    public function getAllStatus() {
        $sql = "
            SELECT *
            FROM tb_status
            ORDER BY name
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addStatus($status) {
        $sql = "
            INSERT INTO tb_status (
               
                name, 
                color
            ) VALUES (
                
                :name, 
                :color
            )
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($status);
        return $this->pdo->lastInsertId();
    }

}
?>