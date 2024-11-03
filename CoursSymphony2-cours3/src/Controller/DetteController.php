<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\DetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DetteController extends AbstractController
{
    #[Route('/dette/{idClient}/client', name: 'dette.index')]
    public function index($idClient,DetteRepository $detteRepository): Response
    {

        $dettes=$detteRepository->findByClient($idClient);
        


        return $this->render('dette/index.html.twig', [
            'dettes'=>$dettes
        ]);
    }
}
