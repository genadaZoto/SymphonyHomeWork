<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    /**
     * @Route("/session/creer/variable/session")
     */
    public function creerVariableSession(SessionInterface $objSession)
    {
        $objSession->set('nom', 'gena');
        return $this->render('session/creer_variable.html.twig');
    }

    /**
     * @Route("/session/afficher/varible/session")
     */
    public function afficherVariableSession(SessionInterface $objSession){
        $nom = $objSession->get("nom");
        return $this->render('session/afficher_variable.html.twig', ['nom'=>$nom]);
    }
}
