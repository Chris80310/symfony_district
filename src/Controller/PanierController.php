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
use App\Entity\Utilisateur;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Mailer\MailerInterface;
use App\Controller\MailService;
use App\Entity\Commande;
use App\Entity\Detail;
use App\Repository\DetailRepository;
use App\Repository\UtilisateurRepository;
use App\Service\PanierService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Mime\Address;
use DateTime;
use phpDocumentor\Reflection\Types\Null_;

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
            // dd($plat);
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

    // Validation panier :

    private $requestStack;
    private $PlatRepository;
    private $em;
    private $ps;

    public function __construct(RequestStack $requestStack, PlatRepository $PlatRepository, EntityManagerInterface $em, PanierService $ps)
    {
        $this->requestStack = $requestStack;
        $this->PlatRepository = $PlatRepository;
        $this->em = $em;
        $this->ps = $ps;
    }

    #[isGranted('ROLE_USER')]
    #[route('/valider_panier', name: 'app_valider_panier')]
    // #[route('/valider_panier', name: 'app_comfirm_commande')]
    public function validerAllItems(Request $request, Utilisateur $user, Security $security, UtilisateurRepository $userRepo,  MailerInterface $mi, DetailRepository $dr)
    {
        //si personne n'est connecté, on renvoie sur la page plat
        /*
            //on recupere les informations de la personne connectée
            $userMail = $security->getUser();

            //on regarde si il y a des informations pour savoir si une personne est connectée
            if ($userMail == Null) {
                //on renvoye sur l'index si personne n'est connecté
                return $this->redirectToRoute('app_plats');
                //j'ajoute un message flash pour informer l'utilisateur qu'il faut qu'il soit connecté 
            }
            //On stocke l'adresse mail de la personne connecte dans la variable userData
            $userData = $userMail->getEmail();
        */

        //on regarde si l'user est connecté
        $userMail = $security->getUser();
        //on recupère le mail en base de données
        $monUser = $userMail->getUserIdentifier();
        //l'utilisateur recupère de la base de données

        $User_Real = $userRepo->findOneBy(['email' => $monUser]);


        $panierTotal = $this->ps->panier();
        $total = $this->ps->getTotal();

        $cmd = new Commande();
        $cmd->setDateCommande(new DateTime());
        $cmd->setUtilisateur($User_Real);
        $cmd->setTotal($total);
        $cmd->setEtat(1);

        $this->em->persist($cmd);

        foreach ($panierTotal as $panier) {
            $plat = $panier["plat"];
            $qte = $panier["quantite"];

            $d = new Detail();
            $d->setCommande($cmd);
            $d->setPlat($plat);
            $d->setQuantite($qte);

            $this->em->persist($d);
        }

        $this->em->flush();

        $session = $this->requestStack->getSession();

        //envoi vers le service mail :

        $expediteur = 'the_district@contact.fr';
        $destinataire = $monUser;

        $sujet = 'Commande detail';

        $lignes_details = $dr->findBy(["commande" => $cmd->getId()]);

        $email = (new TemplatedEmail())
            ->from($expediteur)
            ->to($destinataire)
            ->subject($sujet)

            ->htmlTemplate('panier/confirm_commande.html.twig')

            ->context([
                'commande' => $cmd,
                'details' => $lignes_details,
                'user' => $User_Real
            ]);

        $mi->send($email);

        $session = $this->requestStack->getSession();

        $session->remove('panier');

        //Redirection vers accueil :

        $this->addFlash('success', 'Merci pour votre commande. Un récapitulatif vient d\'être envoyé sur votre messagerie.');

        return $this->redirectToRoute('app_accueil',);
    }
}
