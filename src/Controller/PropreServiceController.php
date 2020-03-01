<?php

namespace App\Controller;

use App\Services\Statistique;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropreServiceController extends AbstractController
{
    /**
     * @Route("/propre/service", name="propre_service")
     */
    public function index()
    {
        return $this->render('propre_service/index.html.twig', [
            'controller_name' => 'PropreServiceController',
        ]);
    }

    private $mesStats;

    public function __construct(Statistique $mesStats){
        $this-> mesStats = $mesStats;
    }

    /**
     * @Route ("/propre/service/utilise/statistique")
     */
    public function utiliseStatistique(){
        $arrayNoms = ['Lucas','Jean','Norah'];
        $permutationsNoms = $this->mesStats->permutations($arrayNoms);
        return $this->render('propre_service/utilise_statistique.html.twig', ['perNom'=>$permutationsNoms]);

    }
}
