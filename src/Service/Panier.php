<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Panier {

    private RequestStack $requestStack;

    public function _construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
    public function addToCart(int $id): void {

      $panier =  $this->requestStack->getSession()->get('panier', []);
        if(!empty($panier[$id])){
            $panier[$id]++;
        }
        else{
            $panier[$id] = 1;
        }

      $this->getSession()->set('panier', $panier);
    }

    private function getSession(): SessionInterface {
        return $this->requestStack->getSession();
    }
}