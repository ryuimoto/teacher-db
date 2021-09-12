<?php

namespace App\Library;
use App\RequestForDelete;

class AdminView
{
    public static function convertArray($strings){
        return explode( ',', $strings);
    }
}