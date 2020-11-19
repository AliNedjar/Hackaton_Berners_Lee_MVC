<?php

namespace App\Model;

class CocktailManager extends AbstractManager
{
    public const TABLE = "cocktail";

    public function __construct()
    {
        parent::__construct(self:: TABLE);
    }
}
