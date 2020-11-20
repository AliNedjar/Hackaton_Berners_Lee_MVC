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

    public function show(string $category)
    {
        $cocktailsManager = new CocktailsManager();
        $categories = $cocktailsManager->getCocktailsByCategories($category);
        return $this->twig->render('Cocktails/cockatrice.html.twig', ['categories' => $categories]);
    }
}
