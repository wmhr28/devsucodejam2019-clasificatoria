<?php


function encrypt($key, $message)
{
    $resp = '';
    if (empty($key)){
        $key='DCJ';
    }
    for ($i = 0; $i < strlen($message); $i++) {
        $char = $message[$i];
        if (isVowel($char)) {
            $resp .= $key . $char;
        } else {
            $resp .= $char;
        }
    }
    return $resp;
}

function isVowel($input)
{
    $vowels = array('a','A', 'e','E', 'i','I', 'o','O', 'u','U');
    return in_array($input, $vowels, true);
}