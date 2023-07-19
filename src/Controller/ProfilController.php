<?php

namespace App\Controller;


use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\UserType;

class ProfilController extends AbstractController
{
    // #[Route('/profil', name: 'app_profil')]
    // public function index(): Response
    // {
    //     $info = ['Loper', 'Dave', 'daveloper@code.dom', '01/01/1970'];
    //     return $this->render('profil/index.html.twig', [
    //         'controller_name' => 'ProfilControllerPhpController',
    //         'informations' => $info,
    //         'test' => 1,
    //     ]);
    // }

    // #[Route('/register', name: 'app_profil')]
    // public function index(): Response
    // {
    //     $info = ['Loper', 'Dave', 'daveloper@code.dom', '01/01/1970'];
    //     return $this->render('profil/index.html.twig', [
    //         'controller_name' => 'ProfilControllerPhpController',
    //         'informations' => $info,
    //         'test' => 1,
    //     ]);
    // }

    private $userRepo;

    public function __construct(UtilisateurRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        $identifiant = $this->getUser()->getUserIdentifier();
        // <-- ICI on récupère l'identifiant unique de l'utilisateur connecté 
        if ($identifiant) {
            $info = $this->userRepo->findOneBy(["email" => $identifiant]);
            // <--- ICI on vérifie qu'on a bien un utilisateur dans la base de donnée qui a ce mail 
        }

        return $this->render('profil/index.html.twig', [
            'informations' => $info
        ]);
    }

    // Modifier le profil :

    // #[Route('/profil/modif_profil', name: 'app_profil')]
    // public function modif_profil(): Response
    // {
    //     $identifiant = $this->getUser()->getUserIdentifier();
    //     if ($identifiant) {
    //         $info = $this->userRepo->findOneBy(["email" => $identifiant]);
    //     }

    //     return $this->render('profil/modif_profil.html.twig', [
    //         'informations' => $info
    //     ]);
    // }

    // #[Route('/profil/modif_profil/{id}', name: 'app_profil')]
    // public function modif_profil(Request $request, User $user): Response
    // {
    //     $identifiant = $this->getUser()->getUserIdentifier();
    //     if ($identifiant) {
    //         $info = $this->userRepo->findOneBy(["email" => $identifiant]);
    //     }

    //     return $this->render('profil/modif_profil.html.twig', [
    //         'informations' => $info
    //     ]);
    // }
}
