<?php
/* Zadanie 5
Napisz funkcję checkLeapYear($string), która w napisie, reprezentującym datę wg. formatu dd.mm.rrrr godz:min:sek podanym jako argument:

Sprawdzi czy w podanej dacie rok to rok przestępny (rok podzielny przez 4)
Jeśli tak zamieni miesiąc na większy o 2
Jeśli miesiąc to 12 zmiana nie następuje, jeśli 11, zmiana na 12
W pozostałych przypadkach zamieni miejscami godziny i sekundy
Zamiana godzin i sekund ma mieć miejsce tylko jeśli wartość sekund jest mniejsza bądź równa 23
W każdym innym przypadku funkcja powinna zwrócić pusty napis
Funkcja powinna zwrócić zmodyfikowany string z datą o ile nie zwraca pustego napisu
Przykład:

$dateString = '15.11.2012 12:58:04';
//jest to rok przestępny i miesiąc to 11 więc zmianiamy na 12
//15.12.2012 12:58:04
$dateString = '03.05.2011 11:08:19';
//nie jest to rok przestępny więc zamieniamy miejscami godziny i sekundy
//03.05.2011 19:08:11 */

function checkLeapYear($string) {
// rozbijamy napis na dwie części: datę i godzinę
$dateArray = explode(' ', $string);
$date = $dateArray[0];
// wyodrębniamy rok z daty
$year = explode('.', $date)[2];

// jeśli rok jest przestępny
if ($year % 4 == 0) {
$month = explode('.', $date)[1];
// jeśli miesiąc to 11, zmieniamy na 12
if ($month == 11) {
$date = str_replace('11', '12', $date);
}
// w pozostałych przypadkach zmieniamy na następny miesiąc
else if ($month < 11) {
$month += 2;
$date = str_replace('.' . ($month - 2) . '.', '.' . $month . '.', $date);
}
}
// jeśli rok nie jest przestępny, zamieniamy godziny i minuty miejscami
else {
$time = explode(':', $dateArray[1]);
// jeśli wartość sekund jest mniejsza lub równa 23, zamieniamy godziny i minuty miejscami
if ($time[2] <= 23) {
$dateArray[1] = $time[1] . ':' . $time[0] . ':' . $time[2];
$date = implode(' ', $dateArray);
}
// w innym przypadku zwracamy pusty napis
else {
return '';
}
}

// zwracamy zmodyfikowaną datę i godzinę
return $date . ' ' . $dateArray[1];
}

//przykłady użycia
$dateString1 = '15.11.2012 12:58:04';
$dateString2 = '03.05.2011 11:08:19';
echo checkLeapYear($dateString1); //15.12.2012 12:58:04
echo checkLeapYear($dateString2); //03.05.2011 19:08:11