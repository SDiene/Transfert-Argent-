<?php

namespace App\Controller;

use App\Entity\Depot;
use App\Entity\Compte;  

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/api", name="api")
*/

class DepotController extends AbstractController
{
    /**
     * @Route("/", name="depot")
     */

    public function index()
    {
        return $this->render('depot/index.html.twig', [
            'controller_name' => 'DepotController',
        ]);
    }

    /**
     * @Route("/depot", name="add_depot", methods={"POST"})  
     * @IsGranted("ROLE_PARTENAIRE")
    */

    public function addDepot(Request $request, EntityManagerInterface $entityManager)
    {
        $values = json_decode($request->getContent());
            $depot = new Depot();

            $depot->setDate(new \Datetime());
            $depot->setMontant($values->montant);
            $part=$this->getDoctrine()->getRepository(Compte::class)->find($values->compte_id); 
            
            $part->setSolde($part->getSolde() + $values->montant);
            $depot->setCompte($part);
            $entityManager->persist($depot);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'Une depot a été faite'
            ];

            return new JsonResponse($data, 201);   
    }
}
