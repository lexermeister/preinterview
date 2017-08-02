<?php

function price_of($ingredients, $prices){
    $sum = 0;
    for($i = 0; $i < sizeof($ingredients); $i++){
        $ingredient = $ingredients[$i]->name;
        $price = $prices->$ingredient;
        $sum += $ingredients[$i]->amount * $price;
    }
    return $sum;
}

