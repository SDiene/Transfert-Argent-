<?php

namespace App\Controller;

use App\Entity\Transaction;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

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

    public function Ajout(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager)
    {
        $transaction = $serializer->deserialize($request->getContent(), Transaction::class, 'json');
        $entityManager->persist($transaction);
        $entityManager->flush();
        $data = [
            'status' => 201,
            'message' => 'La date de transaction a bien été ajouté'
        ];

        return new JsonResponse($data, 201);
    }

}
