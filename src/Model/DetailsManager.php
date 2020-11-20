<?php

namespace App\Model;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpClient\HttpClient;

class DetailsManager
{
    public function getCocktails(): array
    {
        $client =  HttpClient::create();
        $response = $client->request('GET', 'https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');

        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            $content = $response->toArray();
        } else {
            throw new Exception('pas un code 200');
        }
        return $content;
    }
}
