<?php
// src/Controller/DavyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DavyController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function accueil(): Response
    {
        $titre = "Hello Davy";

        return $this->render('davy.html.twig', [
            'titre' => $titre,
        ]);
    }
}