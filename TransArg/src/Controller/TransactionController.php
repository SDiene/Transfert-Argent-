<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

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
     * @Route("/transaction", name="add_transaction", methods={"POST"})
    */

    public function addTransaction(Request $request, EntityManagerInterface $entityManager)
    {
        $values = json_decode($request->getContent());
            $depot = new Transaction();

            $depot->setDatetransaction(new \Datetime());
            $part=$this->getDoctrine()->getRepository(User::class)->find($values->user_id);
            $depot->setUser($part);
            $entityManager->persist($depot);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'La transation a été faite avec succée'
            ];

            return new JsonResponse($data, 201);
    }

}
