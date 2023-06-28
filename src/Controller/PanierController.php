<?php

namespace App\Controller;

use App\Service\Panier;
use SessionIdInterface;
use App\Entity\Plat;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PanierController extends AbstractController
{
    #[Route('/panier', name: 'panier_index')]
    public function index(Plat $plat, SessionInterface $session, PlatRepository $platRepository)
    {
        $panier = $session->get('panier', []);

        // On initialise les variables :
        $data = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $plat = $platRepository->find($id);

            $data[] = [
                'plat' => $plat,
                'quantite' => $quantite
            ];
            $total += $plat->getPrix() * $quantite;
        }
        return $this->render('panier/index.html.twig', ['data' => $data, 'total' => $total]);
    }

    #[Route('/panier/add/{id}', name: 'panier_add')]
    public function add(Plat $plat, SessionInterface $session)
    {
        // On récupère l'id du produit :
        $id = $plat->getId();

        // On récupère le panier existant :
        $panier = $session->get('panier', []);

        // On ajoute le produit dans le panier s'il n'y est pas encore sinon on incrémente sa quantité :
        if (empty($panier[$id])) {
            $panier[$id] = 1;
        } else {
            $panier[$id]++;
        }
        $session->set('panier', $panier);

        // On redirige vers la page du panier :
        return $this->redirectToRoute('panier_index');
    }

    // Décrémenter la quantité :

    #[Route('/panier/remove/{id}', name: 'panier_remove')]
    public function remove(Plat $plat, SessionInterface $session)
    {
        $id = $plat->getId();
        $panier = $session->get('panier', []);

        // On retire le produit du panier s'il n'y a qu'1 exemplaire sinon on décrémente sa quantité :
        if (!empty($panier[$id])) {
            if ($panier[$id] > 1)
                $panier[$id]--;
        } else {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
    }

    // Supprimer le plat du panier :

    #[Route('/panier/delete/{id}', name: 'panier_delete')]
    public function delete(Plat $plat, SessionInterface $session)
    {
        $id = $plat->getId();
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);
        return $this->redirectToRoute('panier_index');
    }

    // vider le panier :

    #[Route('/panier/vider', name: 'panier_vider')]
    public function vider(SessionInterface $session)
    {
        $session->remove('panier');

        return $this->redirectToRoute('panier_index');
    }
}
