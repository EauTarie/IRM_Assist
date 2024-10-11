<?php

namespace App\Controller\Company\Abouts;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutsController extends AbstractController
{
    #[Route('/company/abouts', name: 'company_abouts')]
    public function index(): Response
    {
        return $this->render('company/abouts/abouts/index.html.twig', [
            'controller_name' => 'AboutsController',
        ]);
    }
}
