<?php

namespace App\Controller;

use App\Entity\Compte;

use App\Repository\CompteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/{id}", name="show_compte", methods={"GET"})
     */
    public function show(Compte $compte, CompteRepository $compteRepository, SerializerInterface $serializer)
    {
        $compte = $compteRepository->find($compte->getId());
        $data = $serializer->serialize($compte, 'json', [
            'groups' => ['show']
        ]);
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/{page<\d+>?1}", name="list_compte", methods={"GET"})
     */
    public function list(Request $request,CompteRepository $compteRepository, SerializerInterface $serializer)
    {
        $page = $request->query->get('page');
        if(is_null($page) || $page < 1) {
            $page = 1;
        }
        
        $limit = 10;

        $comptes = $compteRepository->findAllcomptes($page, $limit);
        $data = $serializer->serialize($comptes, 'json',[
            'groups' => ['list']
        ]);

        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/compte", name="add_compte", methods={"POST","GET"})
     */

    public function Ajout(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager)
    {
        $compte = $serializer->deserialize($request->getContent(), Compte::class, 'json');
        $entityManager->persist($compte);
        $entityManager->flush();
        $data = [
            'status' => 201,
            'message' => 'Le numéro de compte a bien été ajouté'
        ];

        return new JsonResponse($data, 201);
    }
    
}
