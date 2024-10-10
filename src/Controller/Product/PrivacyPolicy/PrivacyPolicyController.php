<?php

namespace App\Controller\Product\PrivacyPolicy;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PrivacyPolicyController extends AbstractController
{
    #[Route('/privacy_policy', name: 'privacy_policy')]
    public function index(): Response
    {
        return $this->render('product/privacy_policy/privacy_policy/index.html.twig', [
            'controller_name' => 'PrivacyPolicyController',
        ]);
    }
}
