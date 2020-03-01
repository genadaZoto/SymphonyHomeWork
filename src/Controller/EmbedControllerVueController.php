<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmbedControllerVueController extends AbstractController
{
    /**
     * @Route("/embed/controller/vue/affiche/vue1")
     */
    public function afficheVue1()
    {
        return $this->render('embed_controller_vue/affiche_vue1.html.twig');
    }
}
