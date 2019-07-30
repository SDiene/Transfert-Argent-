<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Partenaire;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/api")
 */

class UserController extends AbstractController
{
    /**
     * @Route("/", name="user")
    */

    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/user", name="add_user", methods={"POST"})
     * @IsGranted("ROLE_SUPER_ADMIN")
     */

    public function addUser(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager,SerializerInterface $serializer,ValidatorInterface $validator)
    {
        $values = json_decode($request->getContent());
        if(isset($values->username,$values->password)) {
            $user = new User();

            $user->setUsername($values->username);
            $user->setPassword($passwordEncoder->encodePassword($user, $values->password));
            $user->setRoles(["ROLE_USER"]);
            $user->setNom($values->nom);
            $user->setPrenom($values->prenom);
            $part=$this->getDoctrine()->getRepository(Partenaire::class)->find($values->partenaire_id);
            $user->setPartenaire($part);
            $errors = $validator->validate($user);
            if(count($errors)) {
                $errors = $serializer->serialize($errors, 'json');
                return new Response($errors, 500, [
                    'Content-Type' => 'application/json'
                ]);
            }
            $entityManager->persist($user);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'L\'utilisateur a été créé'
            ];

            return new JsonResponse($data, 201);
        }
        $data = [
            'status' => 500,
            'message' => 'Vous devez renseigner les clés username et password'
        ];
        return new JsonResponse($data, 500);
    }
    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = $this->getUser();
        return $this->json([
            'username' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    }
    /**
     * @Route("/user/{id}",name="update_user",methods={"PUT"})
     */
    public function updatte(Request $request, SerializerInterface $serializer, User $user,ValidatorInterface $validator, EntityManagerInterface $entityManager)
        {
            $UserUpdate = $entityManager->getRepository(User::class)->find($user->getId());
            $data = json_decode($request->getContent());
            foreach ($data as $key => $value)
            {
                if ($key && !empty($value)) {
                    $name = ucfirst($key);
                    $setter = 'set'.$name;
                    $UserUpdate->$setter($value);
                }
            }
            $errors = $validator->validate($UserUpdate);
            if(count($errors)) 
            {
                $errors = $serializer->serialize($errors, 'json');
                return new Response($errors, 500, [
                    'Content-Type' => 'application/json'
                ]);
            }
            $entityManager->flush();
            $data = [
                'status' => 200,
                'message' => 'Le téléphone a bien été mis à jour'
             ];
        return new JsonResponse($data);
        }

}
