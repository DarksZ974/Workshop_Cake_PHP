<?php

namespace App\Controller;

class ProduitsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $produits= $this->Paginator->paginate($this->Produits->find());
        $this->set(compact('produits'));
    }

    public function add()
    {
        $produit = $this->produits->newEmptyEntity();
        $produit->name = 'A New Article';
        $produit->image = 'images.jpeg';
        $produit->prix = '10€';
        $produit->description = 'bon produit';
        $produit->user_id = '1';

        if ($produits->save($produit)) {
    // The $article entity contains the id now
            $id = $produit->id;
}
        $this->set(compact('produit'));
    }
}