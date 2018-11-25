<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Jeux;
use App\Repository\JeuxRepository;

class LudothequeController extends AbstractController
{
    /**
     * @Route("/ludotheque", name="ludotheque")
     */
    public function index()
    {
        return $this->render('ludotheque/index.html', [
            'controller_name' => 'LudothequeController',
        ]);
    }


    /**
     * @Route("/", name="home")
     */
    public function home()
    {   

        return $this->render('ludotheque/home.html', [
            'title' => 'Ludotek'

        ]);
    }


    /**
     * @Route("/jeux", name="jeux")
     */
    public function ludotheque( JeuxRepository $repo )
    {   
        /* $repo = $this->getDoctrine()->getRepository(Jeux::class); */

        $jeux = $repo->findAll();

        return $this->render('ludotheque/jeux.html', [
            'jeux' => $jeux
        ]);
    }




    /**
    * @Route("/jeux/{id}", name="game_detail")
    */
    public function detail( Jeux $jeu)  //JeuxRepository $repo , $id
    {
        /* $repo = $this->getDoctrine()->getRepository(Jeux::class); */

        /* $jeu = $repo->find($id); */

        return $this->render('ludotheque/detail.html' ,[
            'jeu' => $jeu
        ]);
    }
  


   



}
