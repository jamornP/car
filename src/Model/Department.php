<?php
namespace App\Model;

use App\Database\Db;

class Department extends Db {

    public function getAllDepartment() {
        $sql = "
            SELECT *
            FROM tb_department
            ORDER BY name
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>