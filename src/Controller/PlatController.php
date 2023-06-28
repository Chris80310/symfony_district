<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Entity\Categorie;
use App\Repository\DetailRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PlatController extends AbstractController
{
    private $userRepo;
    private $catRepo;
    private $platRepo;

    public function __construct(UtilisateurRepository $userRepo, CategorieRepository $catRepo, PlatRepository $platRepo, DetailRepository $detailRepo)
    {
        $this->userRepo = $userRepo;
        $this->catRepo = $catRepo;
        $this->platRepo = $platRepo;
    }

    #[Route('/plats', name: 'app_plats')]
    public function plats(): Response
    {
        $plats = $this->platRepo->findall();

        return $this->render('plat/index.html.twig', [
            'controller_name' => 'AccueilController',
            //on va envoyer à la vue notre variable qui stocke un tableau d'objets $categories (c'est-à-dire toutes les categories trouvées dans la base de données)

            'plats' => $plats,

        ]);
    }

    // Plat par id : 

    #[Route('/plat/{id}', name: 'app_plat')]
    public function index(Categorie $id): Response
    {
        $categorie = $this->catRepo->find($id);
        $plats = $this->platRepo->platsParCat($categorie->getId());

        // dd($plats);

        return $this->render('plat/platParCat.html.twig', [
            'controller_name' => 'AccueilController',
            'plats' => $plats
        ]);
    }

    // Details plat :

    #[Route('/detail_plat/{id}', name: 'app_detail_plat')]
    public function platDetail(Plat $id): Response
    {
        $plat = $this->platRepo->find($id);

        return $this->render('detail_plat/detail_plat.html.twig', [
            'controller_name' => 'PlatController',
            'plat' => $plat,
        ]);
    }
}
