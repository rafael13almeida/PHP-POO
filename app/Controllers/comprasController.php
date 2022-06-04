<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class ComprasController 
{
    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $compras = [
            ["titulo" => "Carvão", "desc" => "5kg"],
            ["titulo" => "Arroz", "desc" => "1kg"],
            ["titulo" => "Cerveja", "desc" => "Lata"]
        ];
    
        $listaHTML = '';
    
        foreach ($compras as $key => $value) {
            $listaHTML .= '<li>'.$value["titulo"].' - '.$value["desc"].'</li>';
        } 
    
        $pagina = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>POO</title>
        </head>
        <body>
            <h1>Programação Orientada a Objetos</h1>
            <p>Lista</p>
            <ul>'.$listaHTML.'</ul>
        </body>
        </html>';

        $response->getBody()->write($pagina);
        return $response;
    }
}