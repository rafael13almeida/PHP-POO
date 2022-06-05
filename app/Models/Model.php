<?php

namespace App\Models;
use Config\Db;

class Model
{
  static public function all()
  {
    $obj = new static;
    $conn = Db::conexao();
    $select = "select * from ".$obj->table;
    $ret = $conn->query($select);
    $compras = $ret->fetchAll();
    return $compras;
  }

  public function save()
  {
    $atributos = get_object_vars($this);
    unset($atributos['table']);

    $col = "(";
    $val = "(";
    $aux = true;
    foreach ($atributos as $key => $value) {
      if($aux){
        $aux = false;
        $col .= "`$key`";
        $val .= ":$key";
      }else{
        $col .= ",`$key`";
        $val .= ",:$key";
      }
    }
    $col .= ")";
    $val .= ")";

    $insert = "insert into ".$this->table." ".$col." values ".$val;

    $conn = Db::conexao();
    $stmt = $conn->prepare($insert);
    foreach ($atributos as $key => $value) {
      $stmt->bindParam(':'.$key,$atributos[$key]);
    }

    $stmt->execute();
    return $conn->lastInsertId();

  }


}
