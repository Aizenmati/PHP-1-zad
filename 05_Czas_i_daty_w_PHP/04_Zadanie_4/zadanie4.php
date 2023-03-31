<?php
/* Zadanie 4
Napisz funkcję dayOfBirth($birthDate), która na podstawie 
podanej daty w formacie 19.10.2016 15:14:24 zwróci dzień tygodnia, w którym osoba się urodziła. */

function dayOfBirth($birthDate) {
    // tworzymy obiekt DateTime na podstawie podanej daty
    $date = DateTime::createFromFormat('d.m.Y H:i:s', $birthDate);
    // zwracamy dzień tygodnia w formacie pełnej nazwy (np. "poniedziałek")
    return $date->format('l');
}

// przykładowe użycie
$birthDate = '19.10.2016 15:14:24';
echo dayOfBirth($birthDate); // powinno wypisać "Wednesday"


// Funkcja dayOfBirth przyjmuje jako argument datę w formacie dd.mm.yyyy hh:ii:ss. 
// Następnie tworzy obiekt DateTime na podstawie podanej daty, a następnie zwraca dzień tygodnia,
//  w którym osoba się urodziła, w formacie pełnej nazwy (np. "poniedziałek").
//   W przykładzie powyżej funkcja jest wywoływana na przykładzie daty '19.10.2016 15:14:24',
//    a wynikiem jest nazwa dnia tygodnia, czyli 'Wednesday'.