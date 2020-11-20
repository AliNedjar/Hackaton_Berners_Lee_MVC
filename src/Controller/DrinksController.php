<?php


namespace App\Controller;


class DrinksController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Cocktails/drinks.html.twig');
    }
}