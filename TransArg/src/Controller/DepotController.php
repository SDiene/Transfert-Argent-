<?php

namespace App\Controller;

use App\Entity\Depot;
use App\Entity\Partenaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

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
     * @Route("/depot", name="add_user", methods={"POST"})
    */

    public function addDepot(Request $request, EntityManagerInterface $entityManager)
    {
        $values = json_decode($request->getContent());
            $depot = new Depot();

            $depot->setDate(new \Datetime());
            $depot->setMontant($values->montant);
            $part=$this->getDoctrine()->getRepository(Partenaire::class)->find($values->partenaire_id); 
            
            //$part->setSolde($part->getSolde() + $values->montant);
            $depot->setPartenaire($part);
            $entityManager->persist($depot);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'Une depot a été faite'
            ];

            return new JsonResponse($data, 201);   
    }
}
