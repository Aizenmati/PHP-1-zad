<?php

/* Napisz skrypt, który podaną przez użytkownika kwotę rozmieni na jak najmniejszą liczbę monet i banknotów o nominałach 1, 2, 5, 10 zł. Przykład:

188zł zostanie rozmienione na:
18 banknotów 10zł,
1 moneta 5zł,
1 moneta 2zł,
1 moneta 1zł.
Funkcja przyjmuje liczby całkowite, czyli podana kwota ma być w pełnych złotych.
Funkcja powinna zwracać tablicę, gdzie kluczem jest nominał monety a wartością jej ilość.

*/

function rozmien($kwota) {
    $nominaly = array(10, 5, 2, 1);
    $ilosci = array();

    foreach ($nominaly as $nominal) {
        $ilosc = floor($kwota / $nominal);
        if ($ilosc > 0) {
            $ilosci[$nominal] = $ilosc;
            $kwota -= $ilosc * $nominal;
        }
    }

    return $ilosci;
}

$kwota = 188;
$rozmienione = rozmien($kwota);
echo "Kwota $kwota zł zostanie rozmieniona na:\n";
foreach ($rozmienione as $nominal => $ilosc) {
    if ($nominal > 5) {
        echo "$ilosc banknotów ";
    } else {
        echo "$ilosc monet ";
    }
    echo "$nominal zł\n";
}