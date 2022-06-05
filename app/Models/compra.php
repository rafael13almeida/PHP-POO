<?php
namespace App\Models;

class Compra
{
    static public function all() 
    {
        return  [
            ["titulo" => "Carvão", "desc" => "5kg"],
            ["titulo" => "Arroz", "desc" => "1kg"],
            ["titulo" => "Cerveja", "desc" => "Lata"],
            ["titulo" => "Sal grosso", "desc" => "1kg"]
        ];
    }
}