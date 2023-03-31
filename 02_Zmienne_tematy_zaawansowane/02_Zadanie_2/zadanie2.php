<?php
/*Zadanie 2 - rozwiązywane z wykładowcą
Stwórz zmienną o nazwie $plnToUsd o wartości równej aktualnemu kursowi dolara.
Następnie stwórz funkcję exchange($val), która jako argument przyjmie TYLKO kwotę w złotówkach jaką chcemy wymienić na dolary
Funkcja powinna w odpowiedni sposób w swoim ciele skorzystać ze zmiennej $plnToUsd aby wyliczyć otrzymaną ilość dolarów.
W funkcji wypisz komunikat Wymiana X złotówek po kursie Y da Z dolarów
Dodaj w funkcji zmienną statyczną, której zadanie będzie zliczenie ile wymian zostało już dokonanych
Zmodyfikuj komunikat aby na jego początku dodany był napis Wymiana nr 1 itd.
Wywołaj funkcję kilka razy i sprawdź czy działa prawidłowo*/ 

$plnToUsd = 4.5 ; // aktualny kurs dolara 

function exchange($val) { 
    static $counter = 0; // zmienna statyczna, która będzie zliczać liczbę wymian
    $counter++; // zwiększamy licznik o 1 za każdym razem, gdy funkcja jest wywoływana
    
    $usd = round($val / $GLOBALS['plnToUsd'], 2); // obliczamy ilość dolarów na podstawie kursu
    echo "Wymiana nr $counter: Wymiana $val złotówek po kursie {$GLOBALS['plnToUsd']} da $usd dolarów<br>";
} 

// przykładowe wywołania funkcji
exchange(100);
exchange(200);
exchange(500);


/* W powyższym kodzie zmienna $plnToUsd przechowuje aktualny kurs dolara. 
Funkcja exchange przyjmuje jedną wartość jako argument - kwotę w złotówkach, którą chcemy wymienić na dolary.
W ciele funkcji obliczamy ilość dolarów na podstawie kursu zdefiniowanego w zmiennej $plnToUsd, 
a następnie wypisujemy wynik na stronie. Zmienna statyczna $counter zlicza liczbę wywołań funkcji i 
jest inkrementowana za każdym razem, gdy funkcja jest wywoływana.
Po dodaniu funkcji round z drugim argumentem równym 2, wynik wymiany zostanie zaokrąglony do dwóch miejsc po przecinku.

$GLOBALS jest globalną tablicą asocjacyjną w PHP, która przechowuje wszystkie globalne zmienne dostępne w bieżącym skrypcie. Oznacza to, że zmienna utworzona poza funkcją, w przestrzeni globalnej, jest dostępna wewnątrz funkcji przez użycie $GLOBALS['nazwa_zmiennej'].

W przykładzie kodu, który podałeś, zmienna $plnToUsd została zdefiniowana poza funkcją exchange(), więc nie jest ona dostępna wewnątrz funkcji bez użycia $GLOBALS['plnToUsd']. Bez użycia $GLOBALS, funkcja exchange() nie będzie w stanie uzyskać dostępu do tej zmiennej. Dzięki temu,
 że $plnToUsd jest dostępna przez $GLOBALS['plnToUsd'], funkcja exchange() jest w stanie uzyskać aktualny kurs dolara i użyć go do przeliczenia kwoty w złotówkach na dolary.*/

?>