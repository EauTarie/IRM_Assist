<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OurExpertsController extends AbstractController
{
    #[Route('/our/experts', name: 'app_our_experts')]
    public function index(): Response
    {
        return $this->render('our_experts/index.html.twig', [
            'controller_name' => 'OurExpertsController',
        ]);
    }
}
