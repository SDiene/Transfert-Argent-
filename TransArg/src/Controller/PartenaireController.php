<?php

namespace App\Controller;

use App\Entity\Partenaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api", name="api")
*/

class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaire")
     */
    public function index()
    {
        return $this->render('partenaire/index.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    /**
     * @Route("/partenaire", name="add_depot", methods={"POST"})
     */

    public function add(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager)
    {
        $partenaire = $serializer->deserialize($request->getContent(), Partenaire::class, 'json');
        $entityManager->persist($partenaire);
        $entityManager->flush();
        $data = [
            'status' => 201,
            'message' => 'Un partenaire a été ajouté'
        ];

        return new JsonResponse($data, 201);
    }
    
}
