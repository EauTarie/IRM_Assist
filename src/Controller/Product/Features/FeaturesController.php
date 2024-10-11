<?php

namespace App\Controller\Product\Features;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FeaturesController extends AbstractController
{
    #[Route('/product/features', name: 'product_features')]
    public function index(): Response
    {
        return $this->render('product/features/features/index.html.twig', [
            'controller_name' => 'FeaturesController',
        ]);
    }
}
