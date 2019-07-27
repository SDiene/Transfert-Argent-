<?php

namespace App\Controller;

use App\Entity\Depot;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @Route("/depot", name="add_depot", methods={"POST","GET"})
     */

    public function add(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager)
    {
        $compte = $serializer->deserialize($request->getContent(), Depot::class, 'json');
        $entityManager->persist($compte);
        $entityManager->flush();
        $data = [
            'status' => 201,
            'message' => 'Une depot a été ajouté'
        ];

        return new JsonResponse($data, 201);
    }
}
