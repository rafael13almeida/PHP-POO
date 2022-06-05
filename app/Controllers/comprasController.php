<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Models\Compra;

class ComprasController 
{
    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $compras = Compra::all();

        $this->compras = $compras;
    
        return $this->view('home', $response);
    }

    private function view($view, ResponseInterface $response)
    {
        $pagina = include '../app/Views/'.$view.'.php';

        $response->getBody()->getContents($pagina);
        return $response;
    }
}