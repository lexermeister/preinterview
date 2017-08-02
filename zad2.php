<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check_brackets($str){
    $brackets1 = 0;
    $brackets2 = 0;
    $brackets3 = 0;
    
    for($i = 0; $i < strlen($str); $i++){
        if(($str[$i]) == '(')
            $brackets1++;
        if(($str[$i]) == ')')
            $brackets1--;
        if(($str[$i]) == '[')
            $brackets2++;
        if(($str[$i]) == ']')
            $brackets2--;
        if(($str[$i]) == '{')
            $brackets3++;
        if(($str[$i]) == '}')
            $brackets3--;
    }
    if($brackets1 != 0 || $brackets2 != 0 || $brackets3 != 0){
        return false;
    }
    
    return true;
    
}
