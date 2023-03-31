<?php
/*Zadanie 4
Napisz funkcję firstLast($array), która jako argument otrzyma tablicę elementów i
 wypisze kolejno elementy wg. zasad:

pierwszy element tablicy, po czym usunie go z tablicy
ostatni element tablicy, po czym usunie go z tablicy
aż do wyczerpania elementów w tablicy, każdorazowo przy wypisanym elemencie 
powinna być informacja ile elementów pozostało w tablicy.
*/

function firstLast($array) {
    $count = count($array);
    while($count > 0) {
        echo $array[0] . " - " . ($count - 1) . " el." . "<br>";
        array_shift($array);
        $count--;
        if ($count > 0) {
            echo $array[$count - 1] . " - " . ($count - 1) . " el." . "<br>";
            array_pop($array);
            $count--;
        }
    }
}



$arr = ['Programista', 'zna', 'tablicowe', 'funkcje', 'PHP'];
firstLast($arr);