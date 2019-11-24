<?php

function decrypt($key, $message)
{
    $resp = '';
    if (empty($key)) {
        $key = 'DCJ';
    }
    $keyLen = strlen($key);
    if (!empty($message)) {
        for ($i = 0; $i < strlen($message); $i++) {
            $char = $message[$i];
            if (isVowel($char)) {
                $sub = substr($message, $i - $keyLen, $keyLen);
                if ($sub == $key) {
                    $resp = substr($resp, 0, -$keyLen);
                    $resp .= $char;
                } else {
                    $resp .= $char;
                }
            } else {
                $resp .= $char;
            }
        }
    }
    return $resp;
}

function isVowel($input)
{
    $vowels = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U');
    return in_array($input, $vowels, true);
}