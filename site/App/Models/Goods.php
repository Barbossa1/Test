<?php

namespace App\Models;

use PDO;

class Goods extends \Core\Model
{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM goods");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getOne($id)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM goods WHERE id=$id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}