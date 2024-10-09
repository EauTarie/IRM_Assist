<?php

namespace App\Controller\Product\Updates;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UpdatesController extends AbstractController
{
    #[Route('/product/updates', name: 'product_updates')]
    public function index(): Response
    {
        return $this->render('product/updates/updates/index.html.twig', [
            'controller_name' => 'UpdatesController',
        ]);
    }
}
