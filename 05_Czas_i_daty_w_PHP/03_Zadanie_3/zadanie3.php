<?php
/* Zadanie 3
Napisz funkcję dateIsOk($datesArray), która jako argument otrzyma tablicę z napisami 
reprezentującymi daty, a następnie zwróci tablicę stworzoną wg. zasad:

Każda data w tablicy ma zostać sprawdzona pod kątem poprawności
Utworzona ma zostać nowa tablica gdzie elementem będzie sprawdzona data z "dodanym" napisem
Napisz ma mieć wartość OK jeśli data jest prawidłowa lub NOK jeśli nie jest prawidłowa
Przykład:

$datesArray = ['31.02.2016', '19.03.1986', '99.09.2013', '05.04.1974', '31.04.2030'];
dateIsOk($datesArray);
//powinno zwrócić
[
    '31.02.2016_NOK',
    '19.03.1986_OK',
    '99.09.2013_NOK',
    '05.04.1974_OK',
    '31.04.2030_NOK'
] */

function dateIsOk($datesArray) {
    $result = []; // Inicjalizacja pustej tablicy, która będzie przechowywać wynik

    foreach ($datesArray as $date) { // Pętla iterująca po każdym elemencie tablicy $datesArray
        $dateObject = DateTime::createFromFormat('d.m.Y', $date); // Tworzenie obiektu DateTime na podstawie daty z tablicy
        $formattedDate = $dateObject->format('d.m.Y'); // Formatowanie daty do postaci 'd.m.Y'
        
        if ($dateObject && $formattedDate === $date) { // Sprawdzenie czy data jest poprawna
            $result[] = $date . '_OK'; // Dodanie sprawdzonej i poprawnej daty do wyniku
        } else {
            $result[] = $date . '_NOK'; // Dodanie sprawdzonej i niepoprawnej daty do wyniku
        }
    }

    return $result; // Zwrócenie wyniku
}


$datesArray = ['31.02.2016', '19.03.1986', '99.09.2013', '05.04.1974', '31.04.2030'];
$datesStatus = dateIsOk($datesArray);
foreach ($datesStatus as $status) {
    echo $status . '<br>';
}

// wypisze:
// Array
// (
//     [0] => 31.02.2016_NOK
//     [1] => 19.03.1986_OK
//     [2] => 99.09.2013_NOK
//     [3] => 05.04.1974_OK
//     [4] => 31.04.2030_NOK
// )


// Funkcja dateIsOk przechodzi przez każdą datę w podanej tablicy. 
// Dla każdej daty sprawdza, czy jest poprawna, używając metody DateTime::createFromFormat. 
// Jeśli data jest poprawna, to dodaje do wynikowej tablicy napis w formacie data_OK, w
//  przeciwnym razie w formacie data_NOK. Na końcu funkcja zwraca tablicę wynikową.
//  Funkcja dateIsOk($datesArray) ma za zadanie sprawdzić poprawność dat znajdujących się w przekazanej 
//  jako argument tablicy $datesArray. Dla każdej daty w tablicy zostanie utworzony napis z wartością OK lub NOK,
//   w zależności od tego, czy data jest poprawna czy nie, a następnie zostanie utworzona nowa tablica z tymi
//    napisami.

// W celu sprawdzenia poprawności daty, funkcja używa wbudowanej klasy DateTime w PHP.
//  Dla każdej daty w tablicy $datesArray, funkcja tworzy nowy obiekt klasy DateTime poprzez 
//  wywołanie metody createFromFormat z formatem daty 'd.m.Y'. Następnie sprawdzana jest poprawność 
//  daty poprzez porównanie utworzonego obiektu z datą w formacie 'Y-m-d'. Jeśli obiekt jest równy dacie 
//  w formacie 'Y-m-d', to znaczy, że data jest poprawna, a w przeciwnym przypadku data jest niepoprawna.

// Dla każdej daty w tablicy $datesArray tworzony jest napis z wartością OK lub NOK, w zależności 
// od wyniku sprawdzenia poprawności daty. Napis jest dodawany do nowej tablicy, a następnie zwracana 
// jest ta tablica.