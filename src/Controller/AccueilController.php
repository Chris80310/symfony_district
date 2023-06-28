<?php

namespace App\Controller;

use App\Repository\DetailRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    private $userRepo;
    private $catRepo;
    private $platRepo;
    private $detailRepo;

    public function __construct(UtilisateurRepository $userRepo, CategorieRepository $catRepo, PlatRepository $platRepo, DetailRepository $detailRepo)
    {
        $this->userRepo = $userRepo;
        $this->catRepo = $catRepo;
        $this->platRepo = $platRepo;
        $this->detailRepo = $detailRepo;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        // dd($liste_categorie);

        $userRepo = $this->userRepo->find(1);
        $categories = $this->catRepo->findAll();
        $plats = $this->platRepo->findAll();
        $top3plat = $this->detailRepo->top3plat();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'utilisateur' => $userRepo,
            'categories' => $categories,
            'plats' => $plats,
            'top3plat' => $top3plat
        ]);
    }
}