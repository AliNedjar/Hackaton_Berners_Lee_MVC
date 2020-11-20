<?php

namespace App\Controller;

use App\Model\DetailsManager;

class DetailsController extends AbstractController
{
    public function index()
    {
        $detailsManager = new DetailsManager();
        $cocktails = $detailsManager->getCocktails();

        return $this->twig->render('Details/index.html.twig', ['cocktails' => $cocktails]);
    }
}
