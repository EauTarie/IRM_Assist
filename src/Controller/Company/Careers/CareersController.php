<?php

namespace App\Controller\Company\Careers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CareersController extends AbstractController
{
    #[Route('/company/careers', name: 'company_careers')]
    public function index(): Response
    {
        return $this->render('company/careers/careers/index.html.twig', [
            'controller_name' => 'CareersController',
        ]);
    }
}
