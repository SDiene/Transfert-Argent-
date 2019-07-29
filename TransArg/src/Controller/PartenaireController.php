<?php

namespace App\Controller;

use App\Entity\Partenaire;

use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


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

    public function addPartenaire(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager)
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

     /**
     * @Route("/partenaire/{id}", name="update_partenaire", methods={"PUT"})
     */

    public function updatePartenaire(Request $request, SerializerInterface $serializer, Partenaire $partenaire, ValidatorInterface $validator, EntityManagerInterface $entityManager)
    {
        $partenaireUpdate = $entityManager->getRepository(Partenaire::class)->find($partenaire->getId());
        $data = json_decode($request->getContent());
        foreach ($data as $key => $value){
            if($key && !empty($value)){
                $part = ucfirst($key);
                $setter = 'set'.$part;
                $partenaireUpdate->$setter($value);
            }
        }
        $errors = $validator->validate($partenaireUpdate);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Contente-Type' => 'applications/json'
            ]);
        }
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'Le partenaire a bien été mis à jour'
        ];
        return new JsonResponse($data);
    }
    
    /**
     * @Route("/partenaire/{id}", name="show_partenaire", methods={"GET"})
     */

    public function show(Partenaire $partenaire, PartenaireRepository $partenaireRepository, SerializerInterface $serializer)
    {
        $partenaire = $partenaireRepository->find($partenaire->getId());
        $data = $serializer->serialize($partenaire, 'json', [
            'groups' => ['show']
        ]);
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/partenaire/{page<\d+>?1}", name="list_partenaire", methods={"GET"})
    */

    public function list(Request $request, PartenaireRepository $partenaireRepository, SerializerInterface $serializer)
    {
        $page = $request->query->get('page');
        if(is_null($page) || $page < 1) {
            $page = 1;
        }
        $partenaire = $partenaireRepository->findAll($page, getenv('LIMIT')); 
        $data = $serializer->serialize($partenaire, 'json', [ 'groups' => ['list'] ]);
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
