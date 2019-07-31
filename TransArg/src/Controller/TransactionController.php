<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\User;

use App\Repository\TransactionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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
     * @IsGranted("ROLE_USER")
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

    /**
     * @Route("/transaction/{id}", name="show_transaction", methods={"GET"})
     * @IsGranted("ROLE_USER")
     */

    public function show(Transaction $transaction, TransactionRepository $transactionRepository, SerializerInterface $serializer)
    {
        $transaction = $transactionRepository->find($transaction->getId());
        $data = $serializer->serialize($transaction, 'json', [
            'groups' => ['show']
        ]);
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/transaction/{page<\d+>?1}", name="list_transaction", methods={"GET"})
     * @IsGranted("ROLE_USER")
    */

    public function list(Request $request, TransactionRepository $transactionRepository, SerializerInterface $serializer)
    {
        $page = $request->query->get('page');
        if(is_null($page) || $page < 1) {
            $page = 1;
        }
        $transaction = $transactionRepository->findAll($page, getenv('LIMIT')); 
        $data = $serializer->serialize($transaction, 'json', [ 'groups' => ['list'] ]);
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
