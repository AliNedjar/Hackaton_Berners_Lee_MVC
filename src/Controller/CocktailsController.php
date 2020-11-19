<?php

namespace App\Controller;

use App\Model\CocktailManager;

class CocktailsController extends AbstractController
{
    public function index()
    {
        $cocktailManager = new CocktailManager();
        $cocktails = $cocktailManager->selectAll();

        return $this->twig->render('Cocktails/index.html.twig', ['cocktais' => $cocktails]);
    }
}
