<?php
// src/Controller/ItemsController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Driver\Connection;

class ItemsController
{
      /**
      * @Route("/items")
     */
    
   
    public function items(Connection $connection)
    {
        $users = $connection->fetchAll('SELECT * FROM users');
       
        $response = new Response();
        $response->setContent(json_encode($users));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
   
}