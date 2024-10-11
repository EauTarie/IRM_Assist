<?php

namespace App\Controller\Company\Contacts;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactsController extends AbstractController
{
    #[Route('/company/contacts', name: 'company_contacts')]
    public function index(): Response
    {
        return $this->render('company/contacts/contacts/index.html.twig', [
            'controller_name' => 'ContactsController',
        ]);
    }
}
