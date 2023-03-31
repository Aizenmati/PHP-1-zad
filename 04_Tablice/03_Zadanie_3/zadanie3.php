<?php
/* Zadanie 3
Napisz funkcję returnEven($array), która jako argument otrzyma tablicę elementów i zwróci tablicę, która:

sprawdzi ilość wystąpień danego elementu tablicy
wybierze elementy, których ilość w tablicy jest parzysta i zwróci tablicę z tymi elementami

*/

function returnEven($array) {
    $occurrences = array_count_values($array); // policzenie liczby wystąpień każdego elementu
    $evenOccurrences = array_filter($occurrences, function($count) {
        return $count % 2 == 0; // wybieramy elementy, których liczba wystąpień jest parzysta
    });
    $evenElements = array_keys($evenOccurrences); // pobieramy elementy, których liczba wystąpień jest parzysta
    return $evenElements;
}

$arr = [90, 'dog', 'sun', 'yellow', 15, 'sun', 1, 'dog', 'sun', 'sun', 9, 15];
$result = returnEven($arr);
print_r($result); // wypisze: Array ( [0] => dog [1] => sun [2] => 15 )


// Funkcja array_count_values liczy ile razy każdy element występuje w tablicy, zwracając wynik jako tablicę, w której kluczami są elementy, a wartościami - liczba wystąpień. Następnie funkcja array_filter przefiltruje tę tablicę, wybierając tylko elementy, których liczba wystąpień jest parzysta.
// Na końcu funkcja array_keys zwróci tablicę z samymi elementami, których liczba wystąpień jest parzysta.