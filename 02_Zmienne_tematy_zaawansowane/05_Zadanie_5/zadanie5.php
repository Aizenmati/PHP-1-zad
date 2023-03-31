<?php
/* Zadanie 5
Stwórz zmienną $totalPrice o wartości początkowej 0
Stwórz funkcję o nazwie basket($productName, $price, $quantity), 
której argumenty to nazwa produktu, jego cena i ilość
Funkcja ma za zadanie wyliczyć całkowitą cenę dla przekazanych wartości 
oraz dodać do zmiennej $totalPrice wyliczoną wartość
Funkcja powinna wyświetlić komunikat Nazwa produktu: cena
Wywołaj funkcję kilka razy z różnymi argumentami a następnie wypisz 
wartość zmiennej $totalPrice i sprawdź czy jest prawidłowa */

$totalPrice = 0;

function basket($productName, $price, $quantity) {
    global $totalPrice;
    $subtotal = $price * $quantity;
    $totalPrice += $subtotal;
    echo "$productName: $subtotal zł\n";
}

basket("Jabłka", 2.50, 3);
basket("Chleb", 3.20, 1);
basket("Masło", 5.40, 2);

echo "Całkowita cena: $totalPrice zł\n";

// W powyższym kodzie tworzymy zmienną $totalPrice o wartości początkowej 0. Następnie definiujemy funkcję basket, która przyjmuje trzy argumenty: $productName (nazwa produktu), $price (cena jednostkowa produktu) i $quantity (ilość produktu).

// Wewnątrz funkcji obliczamy wartość koszyka dla danego produktu, mnożąc cenę jednostkową przez ilość, a następnie dodajemy tę wartość do zmiennej $totalPrice. Wyświetlamy również informację o nazwie produktu i jego cenie.

// Na końcu wywołujemy funkcję basket trzy razy, z różnymi argumentami. Na koniec wyświetlamy wartość zmiennej $totalPrice.

?>