<?php
namespace App\Model;

use App\Database\Db;

class Choose extends Db {

    public function getAllChoose() {
        $sql = "
            SELECT *
            FROM tb_choose
            ORDER BY name
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>