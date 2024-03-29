<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UtilisateurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Utilisateur::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPaginatorPageSize(10);
    }

    public function configureFields(string $pageUser): iterable
    {
        yield IdField::new('id')->onlyOnIndex();
        yield TextField::new('password');
        yield TextField::new('email');
        yield TextField::new('nom');
        yield TextField::new('prenom');
        yield TextField::new('telephone');
        yield TextField::new('adresse');
        yield TextField::new('cp');
        yield TextField::new('ville');
        yield ArrayField::new('roles');
    }
}
