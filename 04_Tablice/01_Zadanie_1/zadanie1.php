<?php
/*Zadanie 1 - rozwiązywane z wykładowcą
Napisz funkcję arrayStats($array), która jako argument otrzyma tablicę liczb całkowitych i zwróci tablicę wg. zasad:

znajdzie najmniejszy element w tablicy
znajdzie największy element w tablicy
obliczy średnią arytmetyczną z unikalnych elementów w tablicy
zwróci nową tablicę z kluczami min, max, avg reprezentujące obliczone wartości
Przykład:

$arr = [9, 4, -3, 0, 2, 9, 2, 2, 9];
//powinno zwrócić
[
    'min' => -3,
    'max' => 9,
    'avg' => 2.4  //pamiętaj, że średnia liczona jest z unikalnych elementów tablicy
]  */

function arrayStats($array) {
    $uniqueArray = array_unique($array); // utworzenie tablicy bez duplikatów
    sort($uniqueArray); // sortowanie tablicy rosnąco
    $min = $uniqueArray[0]; // przypisanie pierwszej wartości jako najmniejszej
    $max = end($uniqueArray); // przypisanie ostatniej wartości jako największej
    $sum = array_sum($uniqueArray); // suma elementów tablicy
    $count = count($uniqueArray); // liczba unikalnych elementów w tablicy
    $avg = $count == 0 ? 0 : $sum / $count; // średnia arytmetyczna, uwzględniająca dzielenie przez 0
    
    return [
        'min' => $min,
        'max' => $max,
        'avg' => $avg
    ];
}

$arr = [9, 4, -3, 0, 2, 9, 2, 2, 9];
$result = arrayStats($arr); 
echo "Min: " . $result['min'] . "<br>";
echo "Max: " . $result['max'] . "<br>";
echo "Avg: " . $result['avg'];



/* 
Powyższy kod służy do obliczenia statystyk dla przekazanej do niego tablicy liczb.

Pierwszą wykonywaną operacją jest usunięcie duplikatów z tablicy przy użyciu funkcji array_unique(). Funkcja ta zwraca nową tablicę, w której pozostawione są tylko unikalne wartości.

Następnie wykonywane jest sortowanie tablicy przy użyciu funkcji sort(). Funkcja ta sortuje elementy tablicy w kolejności rosnącej.

Kolejne trzy linijki kodu przypisują wartości najmniejszej, największej oraz sumy elementów z tej posortowanej tablicy. end() służy do zwrócenia ostatniego elementu tablicy.

Następnie wykonywana jest operacja obliczenia średniej arytmetycznej z unikalnych elementów w tablicy. Do tego celu wykorzystywana jest funkcja array_sum() do obliczenia sumy elementów, oraz count() do zliczenia liczby elementów. W przypadku gdy tablica jest pusta (nie ma unikalnych elementów), średnia wynosi 0.

Na koniec funkcja zwraca wynik w postaci tablicy asocjacyjnej z trzema kluczami: min, max, avg, odpowiadającymi wartościom minimalnej, maksymalnej oraz średniej arytmetycznej.

Po wykonaniu funkcji arrayStats(), zostaje utworzona tablica $arr, zawierająca liczby, dla których będą obliczane statystyki. Wynik funkcji jest przypisywany do zmiennej $result, a następnie wypisywany na ekran przy użyciu funkcji print_r().



Funkcja ta działa w następujący sposób:

Utworzenie nowej tablicy $uniqueArray z unikalnymi elementami z tablicy $array za pomocą funkcji array_unique.
Posortowanie tablicy $uniqueArray rosnąco za pomocą funkcji sort.
Przypisanie pierwszego elementu tablicy $uniqueArray do zmiennej $min, ponieważ tablica jest posortowana rosnąco.
Przypisanie ostatniego elementu tablicy $uniqueArray do zmiennej $max.
Obliczenie sumy elementów tablicy $uniqueArray za pomocą funkcji array_sum.
Obliczenie liczby unikalnych elementów w tablicy $uniqueArray za pomocą funkcji count.
Obliczenie średniej arytmetycznej z unikalnych elementów tablicy $uniqueArray.
Zwrócenie nowej tablicy asocjacyjnej z wartościami 'min', 'max' i 'avg' zawierającymi odpowiednio najmniejszy element,
 największy element i średnią arytmetyczną unikalnych elementów tablicy.  */