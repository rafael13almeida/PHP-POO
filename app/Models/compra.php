<?php
namespace App\Models;

use Config\Db;

class Compra
{
    static public function all() 
    {
        $conn = Db::conexao();
        $select = "select * from compras";
        $ret = $conn->query($select);
        $compras = $ret->fetchAll();
        
        return $compras;

    }
}
//teste