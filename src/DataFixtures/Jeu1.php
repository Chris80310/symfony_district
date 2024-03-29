<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Detail;
use App\Entity\Plat;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat1 = new Categorie();
        $cat1->setLibelle("Pizza");
        $cat1->setImage("pizza_cat.jpg");
        $cat1->setActive(true);

        $manager->persist($cat1);

        $cat2 = new Categorie();
        $cat2->setLibelle("Burger");
        $cat2->setImage("burger_cat.jpg");
        $cat2->setActive(true);

        $manager->persist($cat2);

        $cat3 = new Categorie();
        $cat3->setLibelle("Pasta");
        $cat3->setImage("pasta_cat.jpg");
        $cat3->setActive(true);

        $manager->persist($cat3);

        $plat1 = new Plat();
        $plat1->setLibelle("Pizza Bianca");
        $plat1->setDescription("Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.");
        $plat1->setPrix(14.00);
        $plat1->setImage("pizza-salmon.png");
        $plat1->setActive(true);

        $manager->persist($plat1);

        $plat2 = new Plat();
        $plat2->setLibelle("District Burger");
        $plat2->setDescription("Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits.");
        $plat2->setPrix(8.00);
        $plat2->setImage("hamburger.jpg");
        $plat2->setActive(true);

        $manager->persist($plat2);

        $plat3 = new Plat();
        $plat3->setLibelle("Cheeseburger");
        $plat3->setDescription("Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.");
        $plat3->setPrix(8.00);
        $plat3->setImage("cheesburger.jpg");
        $plat3->setActive(true);

        $manager->persist($plat3);

        $plat4 = new Plat();
        $plat4->setLibelle("Lasagnes");
        $plat4->setDescription("Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.");
        $plat4->setPrix(12.00);
        $plat4->setImage("lasagnes_viande.jpg");
        $plat4->setActive(true);

        $manager->persist($plat4);

        $plat5 = new Plat();
        $plat5->setLibelle("Tagliatelles au saumon");
        $plat5->setDescription("Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal !");
        $plat5->setPrix(12.00);
        $plat5->setImage("tagliatelles-saumon.jpg");
        $plat5->setActive(true);

        $manager->persist($plat5);

        $cat1->addPlat($plat1);

        $cat2->addPlat($plat2);
        $cat2->addPlat($plat3);

        $cat3->addPlat($plat4);
        $cat3->addPlat($plat5);

        $commande1 = new Commande();
        $commande1->setDateCommande(new \DateTime('2020-11-30'));
        $commande1->setTotal(16.00);
        $commande1->setEtat(3);

        $manager->persist($commande1);

        $commande2 = new Commande();
        $commande2->setDateCommande(new \DateTime('2020-11-30'));
        $commande2->setTotal(20.00);
        $commande2->setEtat(3);

        $manager->persist($commande2);

        $detail1 = new Detail();
        $detail1->setQuantite(4);
        $detail1->setPlat($plat1);

        $manager->persist($detail1);

        $detail2 = new Detail();
        $detail2->setQuantite(2);
        $detail2->setPlat($plat2);

        $manager->persist($detail2);


        $user1 = new Utilisateur();
        $user1->setEmail("email1@email1.com");
        $user1->setPassword('123');
        $user1->setNom("nom1");
        $user1->setPrenom("jean");
        $user1->setTelephone("0611111111");
        $user1->setAdresse("11 rue du moulin");
        $user1->setCp("80000");
        $user1->setVille("amiens");
        $user1->setRoles(["ROLE_1"]);

        $manager->persist($user1);

        $user2 = new Utilisateur();
        $user2->setEmail("email2@email2.com");
        $user2->setPassword('456');
        $user2->setNom("nom2");
        $user2->setPrenom("charles");
        $user2->setTelephone("0622222222");
        $user2->setAdresse("22 avenue de la place");
        $user2->setCp("80000");
        $user2->setVille("abbeville");
        $user2->setRoles(["ROLE_2"]);

        $manager->persist($user2);

        $user3 = new Utilisateur();
        $user3->setEmail("chris80@service.com");
        $user3->setPassword('123456');
        $user3->setNom("chamb");
        $user3->setPrenom("chris");
        $user3->setTelephone("0123456789");
        $user3->setAdresse("33 rue courgette");
        $user3->setCp("80000");
        $user3->setVille("amiens");
        $user3->setRoles(["ROLE_USER", "ROLE_ADMIN"]);

        $manager->persist($user3);

        $commande1->addDetail($detail1);
        $commande2->addDetail($detail2);

        $user1->addCommande($commande1);
        $user2->addCommande($commande2);

        $manager->flush();
    }
}
