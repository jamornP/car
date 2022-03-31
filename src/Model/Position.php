<?php
namespace App\Model;

use App\Database\Db;

class Position extends Db {

    public function getAllPosition() {
        $sql = "
            SELECT *
            FROM tb_position
            ORDER BY id
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>