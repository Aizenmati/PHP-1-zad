<?php
/* Zadanie 3
Stwórz funkcję bookShow($list), której argumentem będzie tablica tytułów książek (zwykła tablica z napisami)
W funkcji dodaj zmienną statyczną $noOfShowedBooks, która będzie zliczać łączną ilość wyświetlonych książek
Funkcja ma za zadanie przeiterować i wyświetlić tytuły książek, każdorazowo zwiększając licznik przetworzonych książek
Pod koniec funkcja powinna wyświetlić informację: W tym obiegu wyświetlono X książek, Łącznie wyświetlono Y książek, 
gdzie X to liczba książek w tym uruchomieniu funkcji a Y to liczba wszyskich wyświetlonych książek. */

function bookShow($list) {
    static $noOfShowedBooks = 0;
    $count = count($list);
    echo "Lista książek:<br>";
    for($i=0; $i<$count; $i++) {
        echo "- ".$list[$i]."<br>";
        $noOfShowedBooks++;
    }
    echo "W tym obiegu wyświetlono $count książek, Łącznie wyświetlono $noOfShowedBooks książek<br>";
}

// Przykład użycia:
$books = array("Pan Tadeusz", "W pustyni i w puszczy", "Dziady", "Lalka", "Quo vadis");
bookShow($books);
bookShow($books);


// // Definicja funkcji bookShow z argumentem $list będącym tablicą tytułów książek
// function bookShow($list) {
// // Zmienna statyczna $noOfShowedBooks, która będzie zliczać łączną ilość wyświetlonych książek w funkcji
// static $noOfShowedBooks = 0;
// // Pobranie liczby elementów w tablicy $list
// $count = count($list);
// // Wyświetlenie tekstu
// echo "Lista książek:<br>";
// // Pętla for iterująca po wszystkich elementach tablicy $list
// for($i=0; $i<$count; $i++) {
// // Wyświetlenie tytułu książki wraz z myślnikiem i przejściem do nowej linii
// echo "- ".$list[$i]."<br>";
// // Zwiększenie zmiennej $noOfShowedBooks o 1
// $noOfShowedBooks++;
// }
// // Wyświetlenie liczby książek wyświetlonych w bieżącym wywołaniu funkcji oraz łącznej liczby książek wyświetlonych w funkcji
// echo "W tym obiegu wyświetlono $count książek, Łącznie wyświetlono $noOfShowedBooks książek<br>";
// }

// // Przykład użycia funkcji bookShow dwukrotnie z tym samym zestawem książek
// $books = array("Pan Tadeusz", "W pustyni i w puszczy", "Dziady", "Lalka", "Quo vadis");
// bookShow($books);
// bookShow($books);