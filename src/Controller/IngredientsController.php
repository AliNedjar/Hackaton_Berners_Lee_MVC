<?php

namespace App\Controller;

use App\Model\IngredientsManager;

class IngredientsController extends AbstractController
{
    public function recipe(int $ingredients)
    {
        $ingredientsManager = new IngredientsManager();
        $ingredients = $ingredientsManager->getIngredients($ingredients);

        return $this->twig->render('Ingredients/ingredients.html.twig', ['ingredients' => $ingredients]);
    }
}
