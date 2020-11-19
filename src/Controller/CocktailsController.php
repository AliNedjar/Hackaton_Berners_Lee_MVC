<?php

namespace App\Controller;

use App\Model\CocktailsManager;

class CocktailsController extends AbstractController
{
    public function index()
    {
        $cocktailsManager = new CocktailsManager();
        $cocktails = $cocktailsManager->getCocktailsCategories();

        return $this->twig->render('Cocktails/cocktails.html.twig', ['cocktails' => $cocktails]);
    }
}
