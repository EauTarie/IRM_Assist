<?php

namespace App\Controller\Product\Prices;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PricesController extends AbstractController
{
    #[Route('/product/prices', name: 'product_prices')]
    public function index(): Response
    {
        return $this->render('product/prices/prices/index.html.twig', [
            'controller_name' => 'PricesController',
        ]);
    }
}
