<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{


    #[Route('/', name: 'main_home', methods: ['GET'])]

    public function home() : Response {

        return  $this->render('main/home.html.twig');
    }


#[Route('/test', name: 'main_test', methods: ['GET'])]

    public function test() : Response {

        $serie = [
          'titre' => 'Le Seigneur des Anneaux',
          'auteur' => 'JRR Tolkien',
          'annee' => 1954

        ];

        $serie = [
            'titre' => '<b>Le Seigneur des Anneaux</b>',
            'auteur' => 'JRR Tolkien',
            'annee' => 1954
        ];

        $autreVar=1234;


        //forme 1
//    return $this->render('main/test.html.twig',[
//
//        'serie' => $serie,
//        'autreVar' => $autreVar

    // ]);


    //forme 2

    return $this->render('main/test.html.twig',
        compact('serie', 'autreVar'));


}
}