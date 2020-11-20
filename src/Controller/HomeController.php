<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\CocktailsManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $cocktailsManager = new CocktailsManager();
        $cocktails = $cocktailsManager->getTopCocktails();

        $cocktailsManager = new CocktailsManager();
        $cocktails1 = $cocktailsManager->getTopCocktails();

        $cocktailsManager = new CocktailsManager();
        $cocktails2 = $cocktailsManager->getTopCocktails();

        return $this->twig->render('Home/index.html.twig', ['cocktails' => $cocktails,
            'cocktails1' => $cocktails1, 'cocktails2' => $cocktails2]);
    }
}
