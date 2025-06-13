<?php
function buscarPalabrasLargas(string $sentence): string {
    preg_match_all('/\b\w+\b/', $sentence, $matches);
    return array_reduce($matches[0], function ($a , $b){
        return strlen($b) > strlen($a) ? $b : $a;
    }, '');
}

function buscarPalabrasLong(string $w): string{
    preg_match_all('/\b\w+\b/', $w, $matches);
    return array_reduce($matches[0], function ($a , $b) 
    {
        return strlen($b) > strlen($a) ? $b : $a;
    }, '');
}

?>