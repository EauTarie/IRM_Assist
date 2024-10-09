<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnalystController extends AbstractController
{
    #[Route('/analyst', name: 'app_analyst')]
    public function index(): Response
    {
        return $this->render('analyst/index.html.twig', [
            'controller_name' => 'AnalystController',
        ]);
    }
}
