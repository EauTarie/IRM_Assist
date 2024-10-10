<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FileController extends AbstractController
{
    #[Route('/files/new', name: 'file_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $file = new File();
        $form = $this->createForm(FileType::class, $file);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $file->getFile();
    
            // Définit le nom de fichier unique pour éviter les conflits
            $filename = uniqid().'.'.$uploadedFile->guessExtension();
    
            // Déplace le fichier vers le répertoire de destination
            $uploadedFile->move(
                $this->getParameter('files_directory'), // Assure-toi que ce paramètre est défini dans services.yaml
                $filename
            );
    
            // Met à jour les propriétés de l'entité
            $file->setPath($filename);
            $file->setCreatedAt(new \DateTime());
            $file->setUpdatedAt(new \DateTime());
    
            // Enregistre l'entité
            $entityManager->persist($file);
            $entityManager->flush();
    
            return $this->redirectToRoute('file_index');
        }
    
        return $this->render('file/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
}
