<?php

namespace App\Controller;

use App\Entity\Transaction;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\TransactionType;

/**
 * @Route("/api",name="_api")
*/
class TransactionController extends AbstractController
{
    /**
     * @Route("/", name="transaction")
     */
    public function index()
    {
        return $this->render('transaction/index.html.twig', [
            'controller_name' => 'TransactionController',
        ]);
    }

     /**
     * @Route("/transaction", name="new_transaction", methods={"POST"})
    */

    public function add(Request $request, EntityManagerInterface $entityManager)
    {
        $transaction = new Transaction();
        $form=$this->createForm(TransactionType::class,$transaction);
        $data=json_decode($request->getContent(),true);
        $form->handleRequest($request);
        $form->submit($data);
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($transaction);
            $entityManager->flush();
            return new Response('La transaction a bien été enregistré', Response::HTTP_CREATED);
    }

}
