<?php

namespace App\Controller;

use App\Form\AchatLocalType;

use App\Entity\BonDeCommande;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AchatController extends AbstractController
{
    #[Route('/achat', name: 'app_achat', methods:['GET', 'POST'])]
    

    public function new (BonDeCommande $commande = null, Request $request, EntityManagerInterface $manager ) : Response{

        if (!$commande) {
            $commande = new BonDeCommande();
        }
        $form = $this->createForm(AchatLocalType::class, $commande, [
            //'action' => $this->generateUrl('target_route'),
            'method'=> 'GET']);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            if (!$commande->getId()) {
                $commande->setCretedAt(new \DateTimeImmutable());
            }
            $manager->persist($commande);
            $manager->flush();

            dump($form->getData());

            

            return $this->redirectToRoute('show_commande', [
                'id' => $commande->getId()
            ]);
        }
        //Rendering forms
        return $this->render('achat/index.html.twig', [
            'AchatLocalForm' => $form->createView(),

        ]);
    }

    
    public function index(): Response
    {
        return $this->render('achat/index.html.twig', [
            'controller_name' => 'AchatController',
        ]);
    }
}
