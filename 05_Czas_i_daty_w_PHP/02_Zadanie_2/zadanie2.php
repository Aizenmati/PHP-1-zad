<?php
/* Zadanie 2 - rozwiązywane z wykładowcą
Napisz funkcje convertDate($date, $days, $hours, $minutes, $seconds),
 która zwróci zmodyfikowaną datę wg. zasad:

Do przekazanej jako argument daty np. 19.10.2016 15:14:24 dodana ma zostać 
odpowiednia ilość dni, godzin, minut i sekund
Przekazane wartości mogą być również ujemne, wówczas odpowiednią ilość należy odjąć od daty
Przykład:

$date = '19.10.2016 15:14:24';
convertDate($date, 3, 1, 0, 15);
//zwróci 22.10.2016 16:14:39

$date = '19.10.2016 15:14:24';
convertDate($date, -4, -2, 9, 15);
//zwróci 15.10.2016 13:23:39
*/


function convertDate($date, $days, $hours, $minutes, $seconds) {
    $dateTime = DateTime::createFromFormat('d.m.Y H:i:s', $date);
    $interval = new DateInterval("P" . abs($days) . "DT" . abs($hours) . "H" . abs($minutes) . "M" . abs($seconds) . "S");
    if ($days >= 0 && $hours >= 0 && $minutes >= 0 && $seconds >= 0) {
        $dateTime->add($interval);
    } else {
        $dateTime->sub($interval);
    }
    return $dateTime->format('d.m.Y H:i:s');
}
$date = '19.10.2016 15:14:24';
echo convertDate($date, 3, 1, 0, 15); // wyświetli 22.10.2016 16:14:39

$date = '19.10.2016 15:14:24';
echo convertDate($date, -4, -2, 9, 15); // wyświetli 15.10.2016 13:23:39


// Funkcja convertDate służy do dodawania lub odejmowania od podanej daty określonej liczby dni, 
// godzin, minut i sekund.

// Opis działania kodu:

// Na początku tworzony jest obiekt klasy DateTime z podanej daty, przekazanej jako pierwszy argument funkcji.
// php
// Copy code
// $dateTime = DateTime::createFromFormat('d.m.Y H:i:s', $date);
// Następnie tworzony jest obiekt klasy DateInterval na podstawie podanych argumentów
//  $days, $hours, $minutes i $seconds. Wartości tych argumentów są przekazane jako ilość dni, godzin, minut i sekund, jakie mają zostać dodane lub odjęte od daty. Funkcja abs służy do uzyskania wartości bezwzględnej, czyli bez znaku, dla każdej z tych wartości.
// perl
// Copy code
// $interval = new DateInterval("P" . abs($days) . "DT" . abs($hours) . "H" . abs($minutes) . "M" . abs($seconds) . "S");
// Następnie, jeśli wszystkie argumenty są nieujemne, do obiektu DateTime zostaje dodany
//  określony przedział czasu, używając metody add. W przeciwnym wypadku przedział czasu zostanie odjęty od daty, używając metody sub.
// perl
// Copy code
// if ($days >= 0 && $hours >= 0 && $minutes >= 0 && $seconds >= 0) {
//     $dateTime->add($interval);
// } else {
//     $dateTime->sub($interval);
// }
// Ostatecznie, funkcja zwraca sformatowaną datę w postaci ciągu znaków za pomocą metody 
// format na obiekcie DateTime.
// perl
// Copy code
// return $dateTime->format('d.m.Y H:i:s');
// Przykłady użycia funkcji:

// Pierwszy przykład wywołuje funkcję convertDate z datą '19.10.2016 15:14:24' oraz 
// argumentami $days = 3, $hours = 1, $minutes = 0, $seconds = 15, co powoduje dodanie do podanej
//  daty 3 dni, 1 godziny, 0 minut i 15 sekund. Wynikiem jest sformatowana data '22.10.2016 16:14:39'.
// Drugi przykład wywołuje funkcję convertDate z tą samą datą, ale argumentami $days = -4, $hours = -2, $minutes = 9, $seconds = 15, co powoduje odjęcie od podanej daty 4 dni, 2 godzin, 9 minut i 15 sekund. Wynikiem jest sformatowana data '15.10.2016 13:23:39'.