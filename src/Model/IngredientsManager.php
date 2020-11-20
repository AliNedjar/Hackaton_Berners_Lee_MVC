<?php

namespace App\Model;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpClient\HttpClient;

class IngredientsManager
{
    public function getIngredients(int $ingredients): array
    {
        $client =  HttpClient::create();
        $response = $client->request('GET', 'https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=' . $ingredients);
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            $content = $response->toArray();
        } else {
            throw new Exception('pas un code 200');
        }
        return $content;
    }
}
