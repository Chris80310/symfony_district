<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;

class CategorieController extends AbstractController
{
    private $catRepo;

    public function __construct(CategorieRepository $catRepo,)
    {

        $this->catRepo = $catRepo;
    }

    // Toutes les catégories :

    #[Route('/categorie', name: 'app_categorie')]
    public function index(): Response
    {
        $categories = $this->catRepo->findAll();

        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
            'categories' => $categories,
        ]);
    }

    // Détails catégories :

    #[Route('/categorie/{id}', name: 'cat_detail')]
    public function cat(): Response
    {
        $categories = $this->catRepo->findAll();

        return $this->render('detail_categorie.html.twig', [
            'controller_name' => 'CategorieController',
            'categories' => $categories,
        ]);
    }
}
