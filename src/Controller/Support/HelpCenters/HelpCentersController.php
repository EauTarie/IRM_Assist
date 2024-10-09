<?php

namespace App\Controller\Support\HelpCenters;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelpCentersController extends AbstractController
{
    #[Route('/support/help_centers', name: 'support_help_centers')]
    public function index(): Response
    {
        return $this->render('support/help_centers/help_centers/index.html.twig', [
            'controller_name' => 'HelpCentersController',
        ]);
    }
}
