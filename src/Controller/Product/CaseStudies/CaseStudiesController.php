<?php

namespace App\Controller\Product\CaseStudies;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CaseStudiesController extends AbstractController
{
    #[Route('/product/case_studies', name: 'product_case_studies')]
    public function index(): Response
    {
        return $this->render('product/case_studies/case_studies/index.html.twig', [
            'controller_name' => 'CaseStudiesController',
        ]);
    }
}
