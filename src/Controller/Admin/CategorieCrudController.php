<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use phpDocumentor\Reflection\Types\Boolean;

class CategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categorie::class;
    }

    public function configureFields(string $pageCategorie): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('libelle'),
            ImageField::new('image')
                ->setBasePath('images_the_district/category/')
                ->setUploadDir('public/images_the_district/category'),
            BooleanField::new('active'),

            // DateTimeField::new('updatedAt')->hideOnForm(),
            // DateTimeField::new('createdAt')->hideOnForm(),
            // TextEditorField::new('description');
        ];
    }

    // public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    // {
    //     // dd($entityInstance);

    //     if (!$entityInstance instanceof Categorie) return;

    //     $entityInstance->setCreatedAt(new \DateTimeImmutable);

    //     parent::persistEntity($entityManager, $entityInstance);
    // }

}
