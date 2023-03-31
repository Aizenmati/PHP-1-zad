<?php

/*Zadanie 2 - rozwiązywane z wykładowcą
Napisz funkcje foundAndReplace($array), która jako argument otrzyma tablicę maili, a następnie zwróci tablice:

W każdym mailu odnajdzie pozycję znaku @ i zapisze ją jako element nowej tablicy
Poza zwróceniem powyższej tablicy funkcja powinna zamienić wszystkie domeny maili na gmail.com oraz wypisać je na stronie
Przykład:

$mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
//powinno zwrócić
//[8, 11]
//oraz wypisać
//john.doe@gmail.com
//mark.willow@gmail.com */


function foundAndReplace($array) {
    $atPositions = []; //tablica na pozycje znaku @ w każdym mailu
    foreach ($array as $email) {
        $atPosition = strpos($email, '@'); //odnajduje pozycję znaku @ w mailu
        $atPositions[] = $atPosition; //dodanie pozycji do tablicy
        $newEmail = str_replace(strstr($email, '@'), '@gmail.com', $email); //zamienia domenę na gmail.com
        echo $newEmail . '<br>'; //wyświetlenie zmienionego adres email
    }
    return $atPositions;
}
$mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
$result = foundAndReplace($mailList);
echo '[' . implode(', ', $result) . ']';
























// function foundAndReplace($array) {
//     $result = array();
//     foreach ($array as $email) {
//         $atPosition = strpos($email, '@'); //znajduje pozycję @ w emailu
//         array_push($result, $atPosition); //dodaje pozycję do tablicy wynikowej
//         $newEmail = substr_replace($email, 'gmail.com', $atPosition + 1); //zamienia domenę na gmail.com
//         echo "Old email: " . $email . "<br>"; //wyświetla oryginalny email
//         echo "New email: " . $newEmail . "<br><br>"; //wyświetla nowy email
//     }
//     echo "Positions of '@' sign in each email: ";
//     print_r($result); //wyświetla pozycje znaku @ w każdym mailu
//     echo "<br>";
//     return $result;
// }

// $mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
// $positions = foundAndReplace($mailList);


/* Funkcja działa w następujący sposób:

Tworzy pustą tablicę $result, w której będziemy przechowywać pozycje znaku @ z każdego maila.
Następnie przechodzi przez każdy email w tablicy $array, szukając pozycji znaku @ za pomocą funkcji strpos() i zapisując ją do tablicy wynikowej za pomocą array_push().
Dla każdego maila, funkcja tworzy nowy email ($newEmail), w którym zamienia domenę na "gmail.com" za pomocą funkcji substr_replace(). Argumenty tej funkcji to: oryginalny email, wartość, którą należy wstawić, pozycja, od której zacząć wstawianie (czyli pozycja znaku @), a także długość fragmentu, który należy zastąpić (czyli długość domeny).
Następnie funkcja wypisuje nowy email na stronie za pomocą funkcji echo.
Na końcu funkcja zwraca tablicę wynikową $result.
Dodanie dwóch echo w pętli, które wyświetlają oryginalny i zmieniony email na stronie.
Dodanie jednego echo poza pętlą, które wyświetla informację o pozycjach znaku @ w każdym mailu.
Dodanie print_r() poza pętlą, które wyświetla tablicę pozycji znaku @ na stronie

Po wywołaniu funkcji foundAndReplace() z tablicą maili $mailList jako argumentem, na stronie pojawią się informacje o każdym emailu oraz ich nowych wersjach z domeną "gmail.com". Na końcu zostanie wyświetlona tablica pozycji znaku @ w każdym mailu. */

/* Oto funkcja foundAndReplace() z wykorzystaniem funkcji strpos(), explode() i implode(): */

// function foundAndReplace($array) {
//   $result = array();
//   foreach ($array as $email) {
//     $pos = strpos($email, '@'); // znajdź pozycję znaku @ w adresie email
//     if ($pos !== false) {
//       $result[] = $pos; // dodaj pozycję do tablicy wynikowej
//     }
//     $email_parts = explode('@', $email); // rozdziel adres email na część przed i po @
//     $email_parts[1] = 'gmail.com'; // zamień domenę email na gmail.com
//     $email = implode('@', $email_parts); // połącz ponownie adres email
//     echo $email . '<br>'; // wyświetl zmieniony adres email
//   }
//   return $result; // zwróć tablicę z pozycjami @ w adresach email
// }

// $mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
// $positions = foundAndReplace($mailList);
// echo 'Positions of @: ' . implode(', ', $positions); // wyświetl pozycje @ oddzielone przecinkami
/* Funkcja działa w następujący sposób:

Tworzy pustą tablicę $atPositions, która będzie przechowywać pozycje znaku @ w każdym mailu.

Iteruje po każdym elemencie tablicy $array, który jest mailem, i dla każdego maila:

Odnajduje pozycję znaku @ w mailu za pomocą funkcji strpos() i przypisuje ją do zmiennej $atPosition.

Dodaje pozycję $atPosition do tablicy $atPositions za pomocą funkcji [].

Dzieli email na część przed i po znaku @ za pomocą funkcji explode() i zapisuje wynik do zmiennej $parts.

Zamienia drugi element tablicy $parts, którym jest domena maila, na gmail.com.

Łączy części emaila za pomocą funkcji implode() i zapisuje wynik do zmiennej $newEmail.

Wyświetla zmieniony adres email na stronie za pomocą funkcji echo.

Zwraca tablicę $atPositions.
*/

/* Oto również przykład wykorzystania funkcji strstr() i str_replace() do realizacji tego zadania: */

// function foundAndReplace($array) {
//     $atPositions = []; //tablica na pozycje znaku @ w każdym mailu
//     foreach ($array as $email) {
//         $atPosition = strpos($email, '@'); //odnajduje pozycję znaku @ w mailu
//         $atPositions[] = $atPosition; //dodaje pozycję do tablicy
//         $newEmail = str_replace(strstr($email, '@'), '@gmail.com', $email); //zamienia domenę na gmail.com
//         echo $newEmail . '<br>'; //wyświetla zmieniony adres email
//     }
//     return $atPositions;
// }
// $mailList = ['john.doe@interia.pl', 'mark.willow@wp.pl'];
// $result = foundAndReplace($mailList);
// echo 'Positions of "@" character: ';
// print_r($result);

/* Funkcja działa w następujący sposób:

Tworzy pustą tablicę $atPositions, która będzie przechowywać pozycje znaku @ w każdym mailu.

Iteruje po każdym elemencie tablicy $array, który jest mailem, */




?>