<?php 
namespace App\Model;

use App\Database\Db;

class Timebook extends Db {
    public function getAllTime() {
        $sql = "
            SELECT *
            FROM tb_timebook
            ORDER BY time
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}