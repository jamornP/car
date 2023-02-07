<?php 
namespace App\Model;

use App\Database\Db;

class Statusbook extends Db {
    public function getAllStatus() {
        $sql = "
            SELECT *
            FROM tb_status
            ORDER BY id
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

    public function deleteStatus($id) {
        $sql = "
            DELETE FROM tb_status WHERE id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return true;

    }

    public function getStatusById($id) {
        $sql = "
            SELECT 
                *
            FROM 
                tb_status 
            WHERE
                id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll();
        return $data[0];
    }
    public function getStatusByIdStep($id) {
        if($id==1){
            $sql = "
            SELECT 
                *
            FROM 
                tb_status 
            WHERE
                id = 2
        ";
        }elseif($id==2){
            $sql = "
            SELECT 
                *
            FROM 
                tb_status 
            WHERE
                (id = 3) OR (id = 4)
        ";
        }
        $stmt = $this->pdo->query($sql);
        // $stmt->execute($id);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function updateStatus($status) {
        $sql = "
            UPDATE tb_status SET
                name = :name, 
                color = :color
            WHERE id = :id
         ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($status);
        return true;
    }

}
?>