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
    
        $pagina = include '../app/Views/home.php';

        $response->getBody()->getContents($pagina);
        return $response;
    }
}