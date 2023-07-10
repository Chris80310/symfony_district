<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Commande;
use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
    }

    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {

        $url = $this->adminUrlGenerator
            ->setController(PlatCrudController::class)
            // ->setController(CategorieController::class)
            ->generateUrl();

        return $this->redirect($url);

        // return $this->render('Admin/admin.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Symfony District');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Catégories');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Voir les catégories', 'fas fa-eye', Categorie::class),
            MenuItem::linkToCrud('Ajouter une catégorie', 'fas fa-plus', Categorie::class)->setAction(Crud::PAGE_NEW),
        ]);

        yield MenuItem::section('Plats');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Voir les plats', 'fas fa-eye', Plat::class),
            MenuItem::linkToCrud('Ajouter un plat', 'fas fa-plus', Plat::class)->setAction(Crud::PAGE_NEW),
        ]);

        yield MenuItem::section('Commandes');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Voir les commandes', 'fas fa-eye', Commande::class),
            MenuItem::linkToCrud('Ajouter une Commande', 'fas fa-plus', Commande::class)->setAction(Crud::PAGE_NEW),
        ]);

        yield MenuItem::section('Utilisateurs');

        yield MenuItem::subMenu('Actions', 'fas fa-bars')->setSubItems([
            MenuItem::linkToCrud('Voir les utilisateurs', 'fas fa-eye', Utilisateur::class),
            MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', Utilisateur::class)->setAction(Crud::PAGE_NEW),
        ]);
    }
}
