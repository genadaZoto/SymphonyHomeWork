<?php

namespace App\Controller;

use App\Services\Film;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplestwigController extends AbstractController
{
    /**
     * @Route("/exemplestwig/exemples1", name="exemple1twig")
     */
    public function exemple1()
    {
        return $this->render('exemplestwig/exemple_1.html.twig');
    }

    /**
     * @Route("/exemplestwig/affichePays")
     */
    public function affichePays(){
        return $this->render('exemplestwig/affiche_pays.html.twig');
    }

    /**
     * @Route ("/exemplestwig/afficheVille")
     */
    public function afficheVille(){
        $vars = ['nom'=>'Bruxelles',
                 'population' => 150,
                 'pays'=>'Belgique'];
        return $this->render('exemplestwig/affiche_ville.html.twig', $vars);
    }

    /**
     * @Route ("exemplestwig/afficheDate")
     */
    public function afficheDate(){
        $date = date('l jS \of F Y h:i:s A');
        return $this->render('exemplestwig/affiche_date.html.twig', ['today'=>$date]);
    }

    /**
     * @Route("exemplestwig/afficheVilleLangue/{langue}")
     */
    public function afficheVilleLangue(Request $req){
        $langue = $req->get("langue");
        if($langue == "Fr"){
            $ville = ['Liege', 'Namur', 'Charleroi'];
            return $this->render('exemplestwig/affiche_villeLangue.html.twig', ['ville'=>$ville]);
        }
        else{
            $ville = ['Anvers', 'Gent', 'Brugge'];
            return $this->render('exemplestwig/affiche_villeLangue.html.twig', ['ville'=>$ville]);
        }
    }

     /**
     * @Route("exemplestwig/affichePrix/{prix}")
     */
    public function affichePrix(Request $req){
        $prix = $req->get("prix");
        return $this->render('exemplestwig/affiche_prix.html.twig', ['prix'=>$prix]);
    }

    /**
     * @Route("exemplestwig/afficheFilm")
     */
    public function afficheFilm(){
        $film = new Film("gena", "ge");
        
        return $this->render('exemplestwig/affiche_film.html.twig', ['film'=>$film]);
    }

  

}

