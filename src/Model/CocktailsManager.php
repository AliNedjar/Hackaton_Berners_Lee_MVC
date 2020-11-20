<?php

namespace App\Model;

use http\Client\Request;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpClient\HttpClient;

class CocktailsManager
{
    public function getCocktailsCategories(): array
    {
        $client =  HttpClient::create();
        $response = $client->request('GET', 'https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list');

        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            $content = $response->toArray();
        } else {
            throw new Exception('pas un code 200');
        }
        return $content;
    }

    public function getTopCocktails()
    {
        $client = httpClient::create();
        $response = $client->request('GET', 'https://www.thecocktaildb.com/api/json/v1/1/random.php');
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            $content = $response->toArray();
        } else {
            throw new Exception('pas un code 200');
        }
        return $content;
    }
}
