<?php



// Napisz funkcję nextDecade($date), która wypisze na podstawie podanej daty informację na temat rocznic przez kolejne 10 lat. Informacje do wypisania to:

// dzień tygodnia wystąpienia daty w danym roku
// dzień roku wystąpienia daty w danym roku
// Data może być przekazana w formacie RRRR-MM-DD lub DD.MM.RRRR

// Przykład:
function dayOfBirth($birthDate) {
    // tworzymy obiekt DateTime na podstawie podanej daty
    $date = DateTime::createFromFormat('d.m.Y H:i:s', $birthDate);
    // zwracamy dzień tygodnia w formacie pełnej nazwy (np. "poniedziałek")
    return $date->format('l');
}

// przykładowe użycie
$birthDate = '19.10.2016 15:14:24';
echo dayOfBirth($birthDate); // powinno wypisać "Wednesday"