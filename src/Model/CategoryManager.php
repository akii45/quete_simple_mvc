<?php
/**
 * Created by PhpStorm.
 * User: billyvivant
 * Date: 08/10/18
 * Time: 15:01
 */

namespace Model;
require __DIR__ . '/../../app/db.php';

class CategoryManager
{
    public function selectAllCategory():array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
    public function selectOneCategory(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }

}
