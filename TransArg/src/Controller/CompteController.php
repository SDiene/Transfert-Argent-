<?php

namespace App\Controller;

use App\Entity\Compte;

use App\Form\CompteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

    public function add(Request $request, EntityManagerInterface $entityManager)
    {
        $compte = new Compte();
        $form=$this->createForm(CompteType::class,$compte);
        $data=json_decode($request->getContent(),true);
        $form->handleRequest($request);
        $form->submit($data);
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($compte);
            $entityManager->flush();
            return new Response('Une compte a bien été ajoutée', Response::HTTP_CREATED);
    }
}
