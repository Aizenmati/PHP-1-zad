<?php
/*Zadanie 2 - rozwiązywane z wykładowcą
Napisz funkcję cutAndWrite($array), która jako argument otrzyma tablicę wyrazów i zwróci napis wg. zasad:

Jeśli tablica posiada mniej niż 4 elementy funkcja powinna zwrócić false
Z podanej tablicy wybierze trzy kolejne wyrazy rozpoczynając od drugiego wyrazu (czyli te o indeksach 1, 2 i 3)
Zwrócony napis powinien reprezentować pobrane elementy złączone z użyciem znaku */


function cutAndWrite($array) {
  if (count($array) < 4) { //sprawdzenie, czy tablica ma co najmniej 4 elementy
    return false;
  } else {
    $cut = array_slice($array, 1, 3); //wytnij 3 kolejne wyrazy zaczynając od drugiego
    $result = implode('_', $cut); //połącz wyrazy znakiem _
    return $result;
  }
}

$arr1 = ["Ala", "ma", "kota"];
$result1 = cutAndWrite($arr1);
var_dump($result1); // wyświetli false

$arr2 = ["Ala", "ma", "czarnego", "kota"];
$result2 = cutAndWrite($arr2);
echo $result2 . "\n"; // wyświetli "ma_czarnego_kota"


/* Ten kod zawiera funkcję o nazwie cutAndWrite, która przyjmuje jako argument tablicę wyrazów i zwraca napis. Funkcja działa w następujący sposób:

Sprawdza, czy tablica ma co najmniej 4 elementy za pomocą funkcji count(). Jeśli nie, zwraca wartość false.
Jeśli tablica ma co najmniej 4 elementy, to za pomocą funkcji array_slice() wybierane są trzy kolejne wyrazy zaczynając od drugiego. Argumenty funkcji to kolejno: tablica wejściowa, indeks początkowy i liczba elementów do pobrania.
Pobrane trzy wyrazy są łączone ze sobą za pomocą funkcji implode(), której pierwszym argumentem jest separator, a drugim tablica wejściowa. W wyniku otrzymujemy napis złączony separatorami.
Zwracany jest napis z kroku 3.
Funkcje użyte w kodzie:

count() - funkcja zwracająca ilość elementów w tablicy.
array_slice() - funkcja zwracająca fragment tablicy zaczynając od podanego indeksu i o podanej liczbie elementów.
implode() - funkcja łącząca elementy tablicy w napis za pomocą podanego separatora.

Funkcja cutAndWrite przyjmuje jedną argument - tablicę $array - i zwraca napis, który składa się z trzech kolejnych wyrazów z tej tablicy, zaczynając od drugiego wyrazu, połączonych ze sobą znakiem podkreślenia _.

W funkcji najpierw sprawdzane jest, czy tablica ma co najmniej 4 elementy, ponieważ aby móc wybrać trzy kolejne wyrazy, potrzebne są przynajmniej cztery. Jeśli tablica ma mniej niż 4 elementy, funkcja zwróci wartość false i zakończy działanie. W przeciwnym przypadku funkcja wytnie trzy kolejne wyrazy z tablicy, zaczynając od drugiego, używając funkcji array_slice(), która zwraca fragment tablicy o zadanych indeksach. Następnie uzyskany fragment tablicy połączy ze sobą funkcja implode(), która łączy elementy tablicy w jeden napis, oddzielając je podanym separatorem (w tym przypadku podkreśleniem). Ostatecznie funkcja zwróci uzyskany napis.

W wyniku uruchomienia funkcji dla tablicy ["Ala", "ma", "czarnego", "kota"] zwrócony zostanie napis "ma_czarnego_kota", a dla tablicy ["Ala", "ma", "kota"] zostanie zwrócona wartość false.
*/