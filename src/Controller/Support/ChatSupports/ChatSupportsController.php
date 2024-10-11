<?php

namespace App\Controller\Support\ChatSupports;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ChatSupportsController extends AbstractController
{
    #[Route('/support/chat_supports', name: 'support_chat_supports')]
    public function index(): Response
    {
        return $this->render('support/chat_supports/chat_supports/index.html.twig', [
            'controller_name' => 'ChatSupportsController',
        ]);
    }
}
