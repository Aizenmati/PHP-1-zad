<?php

/* Zadanie 5
Napisz funkcję sherlock($el, $array, &$index), która jako argumenty otrzyma szukany element, 
tablicę elementów oraz zmienną $index.

Funkcja powinna przez referencję zwrócić pozycję szukanego elementu do zmiennej $index
Jeśli w tablicy nie znajduje się element zmienna $index powinna mieć wartość false
Jeśli przekazany argument nie jest tablicą funkcja powinna zwrócić false */

function sherlock($el, $array, &$index) { // definicja funkcji sherlock przyjmującej 3 argumenty: $el, $array, &$index
  if (!is_array($array)) { // sprawdzenie, czy drugi argument nie jest tablicą - jeśli tak, to funkcja zwraca false
    return false;
  }

  foreach ($array as $key => $value) { // iteracja po tablicy elementów przy pomocy pętli foreach
    if ($value === $el) { // jeśli znaleziono element, ustawiamy zmienną $index na pozycję tego elementu i zwracamy true
      $index = $key;
      return true;
    }
  }

  $index = false; // jeśli nie znaleziono elementu, ustawiamy zmienną $index na false i zwracamy false
  return false;
}



$arr = [1, 3, 5, 7, 9];
$index = null;
if (sherlock(7, $arr, $index)) {
    echo "Liczba 7 znajduje się na pozycji $index.";
} else {
    echo "Liczba 7 nie znajduje się w tablicy.";
}


// W tym przykładzie funkcja sherlock szuka liczby 7 w tablicy [1, 3, 5, 7, 9] 
// i zwraca jej pozycję do zmiennej $index. Jeśli liczba 7 nie znajduje się w tablicy, 
// zmienna $index będzie miała wartość false. Następnie wyświetlamy informację 
// na stronie w zależności od wyniku działania funkcji.

// Funkcja sherlock przyjmuje trzy argumenty: $el - element, którego pozycję chcemy znaleźć,
//  $array - tablica elementów, w której szukamy, 
//  oraz $index - zmienną przez referencję, do której zostanie zapisana
//   pozycja szukanego elementu lub wartość false jeśli element nie został znaleziony.

// W pierwszej linii funkcja sprawdza, czy drugi argument $array jest tablicą. 
// Jeśli nie jest, to funkcja kończy działanie i zwraca false.

// Następnie funkcja iteruje po tablicy elementów przy pomocy pętli foreach.
//  Dla każdego elementu w tablicy sprawdza, czy jest równy szukanemu elementowi $el. 
//  Jeśli tak, to funkcja ustawia zmienną $index na pozycję znalezionego elementu w tablicy i zwraca true.

// Jeśli szukany element nie został znaleziony, funkcja ustawia zmienną $index na false i również zwraca false.

// Dzięki zastosowaniu przekazywania zmiennej $index przez referencję, 
// zmienna ta może zostać zaktualizowana wewnątrz funkcji i jej wartość może być użyta poza nią.