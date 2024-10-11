<?php

namespace App\Controller\Support\ReportBugs;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReportBugsController extends AbstractController
{
    #[Route('/support/report_bugs', name: 'support_report_bugs')]
    public function index(): Response
    {
        return $this->render('support/report_bugs/report_bugs/index.html.twig', [
            'controller_name' => 'ReportBugsController',
        ]);
    }
}
