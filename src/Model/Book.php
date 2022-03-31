<?php
namespace App\Model;

use App\Database\Db;

class Book extends Db {

    public function getAllBook() {
        $sql = "
            SELECT 
                b.name,
                b.date_register,
                b.start_date,
                b.end_date,
                b.origin,
                b.destination,
                b.title,
                b.count,
                b.idnum,
                b.staff,
                b.remark,b.user_add,
                p.name AS position,
                d.name AS department,
                ch.name AS choose,
                c.name AS car
            FROM 
                `tb_book` AS b 
                LEFT JOIN tb_position AS p ON b.p_id = p.id
                LEFT JOIN tb_department AS d ON b.d_id = d.id
                LEFT JOIN tb_choose AS ch ON b.ch_id = ch.id
                LEFT JOIN tb_car AS c ON b.c_id = c.id
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

}






?>