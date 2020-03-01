<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeritageTwigController extends AbstractController
{
    /**
     * @Route("/heritage/twig/master/page1", name="heritage_twig")
     */
    public function index()
    {
        return $this->render('heritage_twig/master_page_1.html.twig ', [
            'controller_name' => 'HeritageTwigController',
        ]);
    }
    /**
 * @Route("/heritage/twig/contenu1/master/page1")
 */
public function contenu1MasterPage1()
{
   return $this->render('heritage_twig/contenu_1_master_page_1.html.twig');
}

}
