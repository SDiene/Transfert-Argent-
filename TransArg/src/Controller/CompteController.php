<?php

namespace App\Controller;

use App\Entity\Compte;
use App\Entity\Partenaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
/**
 * @Route("/api",name="_api")
*/
class CompteController extends AbstractController
{
    /**
     * @Route("/", name="compte")
     */
    public function index()
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }

    /**
     * @Route("/compte", name="new_compte", methods={"POST"})
    */

    public function addcompte(Request $request, EntityManagerInterface $entityManager)
    {
        $values = json_decode($request->getContent());
            $compte = new Compte();

            $compte->setNumerocompte($values->numerocompte);
            $part=$this->getDoctrine()->getRepository(Partenaire::class)->find($values->partenaire_id);
            $compte->setPartenaire($part);
            $entityManager->persist($compte);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'Le compte vient d\'etre créer'
            ];

            return new JsonResponse($data, 201);
        
    }
}
