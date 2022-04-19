<?php
namespace App\Model;
use App\Database\Db;

 class User extends Db {
     public function createUser($user) {
         $user['password'] = password_hash($user['password'],PASSWORD_DEFAULT);

         $sql = "
            INSERT INTO tb_users (
                name,
                surname,
                email,
                password,
                p_id,
                d_id
            ) VALUES (
                :name,
                :surname,
                :email,
                :password,
                :position,
                :department
            )
         ";
         $stmt = $this->pdo->prepare($sql);
         $stmt->execute($user);

         session_start();
         $_SESSION['name'] = $user['name'];
         $_SESSION['surname'] = $user['surname'];
         $_SESSION['email'] = $user['email'];
         $_SESSION['position'] = $user['position'];
         $_SESSION['department'] = $user['department'];
         $_SESSION['role'] = 'member';
         $_SESSION['login'] = true;

         return $this->pdo->lastInsertId();
     }
 }


?>