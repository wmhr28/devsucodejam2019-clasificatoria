<?php
define("KAPREKAR", 6174);

function kaprekar($n)
{
    if ($n==0){
        return -1;
    }
    if ($n==1){
        return 5;
    }
    $string = $n . '';
    $lenN=strlen($string);
    if ($lenN!=4){
        return -1;
    }
    $aString = str_split($string);
    $aUnique = array_unique($aString);
    if (count($aUnique)<2){
        return -1;
    }

    return kaprekarCount($n, 0);
}

function kaprekarCount($n, $count)
{
    if ($n == KAPREKAR) {
        return $count;
    } else {
        $string = $n . '';
        $aString = str_split($string);
        rsort($aString);
        $numG = (int)implode('', $aString);
        sort($aString);
        $numP = (int)implode('', $aString);
        $tempN=($numG - $numP);
        if (strlen($tempN)==3){
            $tempN='0'.$tempN;
        }
        return kaprekarCount($tempN, $count + 1);
    }
}