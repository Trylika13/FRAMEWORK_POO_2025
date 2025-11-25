<?php

namespace App\Models;

use \PDO, \Core\DB;

abstract class CategoriesRepository
{
    public static function findAll(): array
    {
        $sql = "SELECT *
            FROM categories
            ORDER BY created_at DESC
            ";

        $rs = DB::getConnection()->query($sql);
        return $rs->fetchAll(PDO::FETCH_CLASS, Category::class);
    }
}
