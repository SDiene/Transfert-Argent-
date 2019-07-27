<?php

namespace App\Controller;

use App\Entity\Partenaire;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

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
     * @Route("/partenaire", name="new_partenaire", methods={"GET","POST"})
    */

    public function add(Request $request, EntityManagerInterface $entityManager)
    {
        $partenaire = new Partenaire();
        $form=$this->createForm(PartenaireType::class,$partenaire);
        $data=json_decode($request->getContent(),true);
        $form->handleRequest($request);
        $form->submit($data);
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->flush();
            return new Response('Le Partenaire a bien été ajouté', Response::HTTP_CREATED);
    }
}
