<?php

namespace App\Controller\Support\GettingStarteds;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GettingStartedsController extends AbstractController
{
    #[Route('/support/getting_started', name: 'support_getting_started')]
    public function index(): Response
    {
        return $this->render('support/getting_starteds/getting_starteds/index.html.twig', [
            'controller_name' => 'GettingStartedsController',
        ]);
    }
}
