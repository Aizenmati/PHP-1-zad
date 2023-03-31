<?php

/* Zadanie 4
Napisz funkcję fillWithDots($array), która jako argument otrzyma tablicę
 wyrazów a następnie wypisze kolejne wyrazy wg. zasad:

Sprawdzi jaką długość ma najdłuższy napis
Doda do wyrazu tyle kropek na jego końcu aby długość nowo utworzonego napisu była równa najdłuższemu napisowi
Przykład:

$wordArray = ['white', 'snow', 'is', 'falling', 'wow'];
//wypisze
//white..
//snow...
//is.....
//falling
//wow....

Hint: przed wypisaniem napisów wypisz na stronie tag <pre>, 
wtedy czcionka zostanie zamieniona na taką o stałej szerokości i efekt będzie dobrze widoczny.
*/

function fillWithDots($array) {
    $maxLength = 0;
    foreach($array as $word) {
        $length = strlen($word);
        if($length > $maxLength) {
            $maxLength = $length;
        }
    }

    echo "<pre>"; // tag <pre> aby zachować stałą szerokość czcionki
    foreach($array as $word) {
        $dotsToAdd = $maxLength - strlen($word);
        $wordWithDots = $word . str_repeat('.', $dotsToAdd);
        echo "$wordWithDots\n";
    }
    echo "</pre>";
}

$wordArray = ['white', 'snow', 'is', 'falling', 'wow'];
fillWithDots($wordArray);
?>