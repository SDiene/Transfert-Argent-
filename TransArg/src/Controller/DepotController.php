<?php

namespace App\Controller;

use App\Entity\Depot;
use App\Form\DepotType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @Route("/depot", name="new_depot", methods={"POST"})
    */

    public function add(Request $request, EntityManagerInterface $entityManager)
    {
        $depot = new Depot();
        $form=$this->createForm(DepotType::class,$depot);
        $data=json_decode($request->getContent(),true);
        $form->handleRequest($request);
        $form->submit($data);
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($depot);
            $entityManager->flush();
            return new Response('Une depot a bien été ajoutée', Response::HTTP_CREATED);
    }
}
