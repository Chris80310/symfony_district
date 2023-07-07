<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;




// public function configureFields(string $pageCategorie): iterable
// {
//     return [
//         IdField::new('id')->hideOnForm(),
//         TextField::new('libelle'),
//         ImageField::new('image')
//             ->setBasePath('images_the_district/category/')
//             ->setUploadDir('public/images_the_district/category'),
//         BooleanField::new('active'),

//         // DateTimeField::new('updatedAt')->hideOnForm(),
//         // DateTimeField::new('createdAt')->hideOnForm(),
//         // TextEditorField::new('description');
//     ];
// }