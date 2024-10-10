<?php

namespace App\Controller\Product\CGU;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CGUController extends AbstractController
{
    #[Route('/product/cgu', name: 'cgu')]
    public function index(): Response
    {
        return $this->render('product/cgu/cgu/index.html.twig', [
            'controller_name' => 'CGUController',
        ]);
    }
}
