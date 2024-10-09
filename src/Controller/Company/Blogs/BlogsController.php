<?php

namespace App\Controller\Company\Blogs;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogsController extends AbstractController
{
    #[Route('/company/blogs', name: 'company_blogs')]
    public function index(): Response
    {
        return $this->render('company/blogs/blogs/index.html.twig', [
            'controller_name' => 'BlogsController',
        ]);
    }
}
