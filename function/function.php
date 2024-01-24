<?php



function createPassword($length, $repeteadElements, $charsPool = 'qwertyuiopasdfghjklzxcvbnmWERTYUIOPASDFGHJKLZXCVBNM'){
    if ($repeteadElements == false && strlen($charsPool) < $length){
        return false;
    }

    $password = '';

    
    while( strlen($password) < $length){
        $randomChar = random_int(0, strlen($charsPool) - 1);
        $password = $password . $charsPool[$randomChar];

        if ($repeteadElements == false){
            $charsPool = str_replace($charsPool[$randomChar], '', $charsPool );
        }
    }

    return $password;
}