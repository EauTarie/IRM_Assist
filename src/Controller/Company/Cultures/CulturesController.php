<?php

namespace App\Controller\Company\Cultures;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CulturesController extends AbstractController
{
    #[Route('/company/cultures', name: 'company_cultures')]
    public function index(): Response
    {
        return $this->render('company/cultures/cultures/index.html.twig', [
            'controller_name' => 'CulturesController',
        ]);
    }
}
