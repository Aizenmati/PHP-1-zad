<?php
/*Zadanie 1 - rozwiązywane z wykładowcą
Stwórz funkcję, która obliczy pole trójkąta triangleArea($a, $height, &$area).
Funkcja powinna przyjmować 2 standardowe argumenty: długość boku i wysokość
Trzeci argument powinien być przekazany z użyciem referencji
Po obliczeniu w funkcji pola wpisz do zmiennej $area wynik (zauważ że zmienna jest przekazana przez referencję)
Następnie wypisz na stronie komunikat Pole trójkąta o boku X i wysokości Y to Z, używając do tego odpowiednich zmiennych */

// Definiujemy funkcję, która oblicza pole trójkąta na podstawie długości boku i wysokości
function triangleArea($a, $height, &$area) {
    // Wzór na pole trójkąta to 0.5 * a * h
    $area = 0.5 * $a * $height;
}

// Definiujemy zmienne, które będziemy używać w naszej funkcji
$a = 5; // długość boku
$height = 3; // wysokość
$area = 0; // zmienna, do której zostanie zapisane pole trójkąta

// Wywołujemy funkcję, przekazując do niej zmienne $a i $height oraz zmienną $area przez referencję
triangleArea($a, $height, $area);

// Wyświetlamy wynik na stronie
echo "Pole trójkąta o boku $a i wysokości $height to $area" . "<br>";

?>