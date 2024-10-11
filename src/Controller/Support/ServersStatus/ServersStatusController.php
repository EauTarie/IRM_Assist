<?php

namespace App\Controller\Support\ServersStatus;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServersStatusController extends AbstractController
{
    #[Route('/support/servers_status', name: 'support_servers_status')]
    public function index(): Response
    {
        return $this->render('support/servers_status/servers_status/index.html.twig', [
            'controller_name' => 'ServersStatusController',
        ]);
    }
}
