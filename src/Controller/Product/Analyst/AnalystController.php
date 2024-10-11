<?php

namespace App\Controller\Product\Analyst;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnalystController extends AbstractController
{
    #[Route('/product/analyst', name: 'product_analyst')]
    public function index(): Response
    {
        return $this->render('product/analyst/analyst/index.html.twig', [
            'controller_name' => 'AnalystController',
        ]);
    }
}
