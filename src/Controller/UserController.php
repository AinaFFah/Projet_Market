<?php

namespace App\Controller;
use App\Service\Methodes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'app_user')]
    public function index(Methodes $methodes ): Response
    {

        $somme = $methodes->somme(1,4);

        //dump($somme);

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
