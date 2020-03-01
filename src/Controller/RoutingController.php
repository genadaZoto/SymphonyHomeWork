<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoutingController extends AbstractController
{
    /**
     * @Route("/routing", name="routing")
     */
    public function sayHello()
    {
        return new Response("Today is" . date("Y/m/d").", my first job from home");
    }

    /**
     * @Route("/routing/redirect/imdb/{titre}")
     */
    public function routingRedirectImdb(Request $req){
        $url = "http://www.imdb.com/find?ref_=nv_sr_fn&q=".$req->get('titre');
        return $this->redirect($url);
    }
    /**
     * @Route("/exemples/afficher/contact/{prenom}/{profession}")
     */
    public function afficherContact(Request $req){
        $lePrenom = $req->get ("prenom");
        $laProf = $req->get("profession");
        return new Response ("Le prenom est: " .$lePrenom. "Proffession: ". $laProf );
    }
   

}
