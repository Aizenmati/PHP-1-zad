<?php 

/* Zadanie 1 - rozwiązywane z wykładowcą
Napisz funkcje evenBigOddSmall($string), która zmodyfikuje i zwróci podany jako argument napis:

Parzyste wyrazy powinny zostać zamienione na duże litery
Nieparzyste wyrazy powinny zostać zamienione na małe litery
W nowo utworzonym napisie wyrazy powinny być połączone znakiem _
Przykład:

$string = "Nice to be great developer";
//zamieni na "nice_TO_be_GREAT_developer"  */ 

function evenBigOddSmall($string) {
    $words = explode(' ', $string); //rozdziela napis na słowa
    for ($i = 0; $i < count($words); $i++) {
        if ($i % 2 == 0) { //parzyste wyrazy
            $words[$i] = strtoupper($words[$i]); //zmiana na duże litery
        } else { //nieparzyste wyrazy
            $words[$i] = strtolower($words[$i]); //zmiana na małe litery
        }
    }
    return implode('_', $words);
}


$string = "Nice to be great developer";
$result = evenBigOddSmall($string);
echo $result;

/* inne rozwiązanie:
function evenBigOddSmall($string) {
    $words = explode(" ", $string);

    for($i = 0; $i < count($words); $i++) {
        if( ($i+1) % 2 == 0 ) { // ALBO $i % 2 != 0
            $words[$i] = strtoupper( $words[$i] );
        } else {
            $words[$i] = strtolower( $words[$i] );
        }
    }

    $string = implode('_', $words);

    return $string;
}

$string = "Nice to be great developer";
echo evenBigOddSmall($string);
 */

/* Po wywołaniu funkcji evenBigOddSmall() z napisem $string jako argumentem, zostanie zwrócony i wyświetlony zmodyfikowany napis, 
w którym parzyste wyrazy są zamienione na duże litery, nieparzyste na małe, a wszystkie wyrazy są połączone znakiem _. */

?>