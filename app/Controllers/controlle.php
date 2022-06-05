<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class Controlle
{
    public function view(String $view,ResponseInterface $response): ResponseInterface
    {
        
        $pagina = include '../app/Views/'.$view.'.php';

        $response->getBody()->getContents($pagina);
        return $response;
    }
}