<?php
/* Zadanie 3
Napisz funkcję switchString($string), która jako argument otrzyma napis a następnie zwróci napis:

Odwracając kolejność znaków w napisie (ostatni znak będzie pierwszym, pierwszy ostatnim itd)
Hint: sprawdź czy nie ma wbudowanej funkcji wykonującej to zadanie
Wytnie pierwsze 5 znaków z napisu i je zwróci
Jeśli napis ma mniej niż 5 znaków, funkcja powinna zwrócić pusty napis  */

function switchString($string) {
  $reversed = strrev($string); //odwrócenie napisu
  $cut = substr($reversed, 0, 5); //wytnie pierwsze 5 znaków
  if (strlen($string) < 5) { //sprawdzenie, czy napis ma co najmniej 5 znaków
    return '';
  } else {
    return $cut;
  }
}

$string = "abcdefg";
$result = switchString($string);
echo "Wynik funkcji switchString dla napisu \"$string\" to: $result";
?>