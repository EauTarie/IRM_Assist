<?php

namespace App\Controller\Product\OurExperts;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OurExpertsController extends AbstractController
{
    #[Route('/product/our_experts', name: 'product_our_experts')]
    public function index(): Response
    {
        return $this->render('product/our_experts/our_experts/index.html.twig', [
            'controller_name' => 'OurExpertsController',
        ]);
    }
}
