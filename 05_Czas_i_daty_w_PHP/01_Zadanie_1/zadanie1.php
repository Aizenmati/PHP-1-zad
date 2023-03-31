<?php
/* Zadanie 1 - rozwiązywane z wykładowcą
Napisz funkcję dateDiff($date1, $date2), której zadaniem jest wypisanie napisu, opisującego różnicę między 2 datami.

Przekazywane daty są w formie napisu np: 19.10.2016 15:14:24
Funkcja ma obliczyć różnicę między 2 datami
Wypisany napis ma być wg. wzoru 10dni 5godzin 2minuty 15sekund
Sprawdź działanie Twojej funkcji na kilku parach dat */

function dateDiff($date1, $date2) {
    // Konwersja dat na znaczniki czasu (timestamp)
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);

    // Obliczenie różnicy w sekundach
    $diff = abs($timestamp2 - $timestamp1);

    // Obliczenie liczby dni, godzin, minut i sekund
    $days = floor($diff / (60 * 60 * 24));
    $hours = floor(($diff - $days * 60 * 60 * 24) / (60 * 60));
    $minutes = floor(($diff - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
    $seconds = $diff - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minutes * 60;

    // Złożenie napisu opisującego różnicę
    $diffString = "";
    if ($days > 0) {
        $diffString .= $days . "d ";
    }
    if ($hours > 0) {
        $diffString .= $hours . "h ";
    }
    if ($minutes > 0) {
        $diffString .= $minutes . "m ";
    }
    if ($seconds > 0) {
        $diffString .= $seconds . "s";
    }

    // Zwrócenie napisu opisującego różnicę
    return $diffString;
}

$date1 = "19.10.2016 15:14:24";
$date2 = "21.10.2016 17:23:10";
echo "Różnica między datami $date1 i $date2 wynosi: " . dateDiff($date1, $date2) . "\n";
echo "<br>";
$date1 = "01.01.2023 00:00:00";
$date2 = "01.01.2023 01:00:00";
echo "Różnica między datami $date1 i $date2 wynosi: " . dateDiff($date1, $date2) . "\n";
echo "<br>";
$date1 = "01.01.2023 00:00:00";
$date2 = "01.01.2023 00:01:30";
echo "Różnica między datami $date1 i $date2 wynosi: " . dateDiff($date1, $date2) . "\n";



// // inna metoda: 

// function dateDiff($date1, $date2) {
//   $date1 = strtotime($date1);
//   $date2 = strtotime($date2);
//   $diff = abs($date2 - $date1);
//   $days = floor($diff / 86400);
//   $hours = floor(($diff % 86400) / 3600);
//   $minutes = floor(($diff % 3600) / 60);
//   $seconds = $diff % 60;
  
//   $output = '';
//   if ($days > 0) {
//     $output .= $days . ' dni ';
//   }
//   if ($hours > 0) {
//     $output .= $hours . ' godzin ';
//   }
//   if ($minutes > 0) {
//     $output .= $minutes . ' minut ';
//   }
//   if ($seconds > 0) {
//     $output .= $seconds . ' sekund';
//   }
  
//   return trim($output);
// }
// echo dateDiff('19.10.2016 15:14:24', '20.10.2016 15:14:24');
// echo "<br>"; // 1 dni
// echo dateDiff('19.10.2016 15:14:24', '19.10.2016 16:14:24'); // 1 godzin
// echo "<br>";
// echo dateDiff('19.10.2016 15:14:24', '19.10.2016 15:15:24'); // 1 minut 0 sekund


// kojena metoda z użyciem funkcji mktime:

// function dateDiff($date1, $date2) {
//   $date1 = explode(' ', $date1);
//   $date2 = explode(' ', $date2);
//   $date1_d = explode('.', $date1[0]);
//   $date2_d = explode('.', $date2[0]);
//   $date1_t = explode(':', $date1[1]);
//   $date2_t = explode(':', $date2[1]);
//   $ts1 = mktime($date1_t[0], $date1_t[1], $date1_t[2], $date1_d[1], $date1_d[0], $date1_d[2]);
//   $ts2 = mktime($date2_t[0], $date2_t[1], $date2_t[2], $date2_d[1], $date2_d[0], $date2_d[2]);
//   $diff = abs($ts2 - $ts1);
//   $days = floor($diff / 86400);
//   $hours = floor(($diff % 86400) / 3600);
//   $minutes = floor(($diff % 3600) / 60);
//   $seconds = $diff % 60;
  
//   $output = '';
//   if ($days > 0) {
//     $output .= $days . ' dni ';
//   }
//   if ($hours > 0) {
//     $output .= $hours . ' godzin ';
//   }
//   if ($minutes > 0) {
//     $output .= $minutes . ' minut ';
//   }
//   if ($seconds > 0) {
//     $output .= $seconds . ' sekund';
//   }
  
//   return trim($output);
// }

// echo dateDiff('19.10.2016 15:14:24', '20.10.2016 15:14:24'); // 1 dni
// echo "<br>";
// echo dateDiff('19.10.2016 15:14:24', '19.10.2016 16:14:24'); // 1 godzin
// echo "<br>";
// echo dateDiff('19.10.2016 15:14:24', '19.10.2016 15:15:24'); // 1 minut 0 sekund



//przykładowe rozwiązanie z zajęć:

// function dateDiff($date1, $date2) {
//     $date1Ts = strtotime( $date1 );
//     $date2Ts = strtotime( $date2 );

//     if( $date1Ts > $date2Ts ) {
//         $diffTs = $date1Ts - $date2Ts;
//     } else {
//         $diffTs = $date2Ts - $date1Ts;
//     }

//     $dni = 0;
//     $godziny = 0;
//     $minuty = 0;
//     $sekundy = 0;

//     while( $diffTs > 0 ) {
//         if( $diffTs >= 24*3600 ) {
//             $diffTs -= 24*3600;
//             $dni++;
//         } elseif( $diffTs >= 3600 ) {
//             $diffTs -= 3600;
//             $godziny++;
//         } elseif( $diffTs >= 60 ) {
//             $diffTs -= 60;
//             $minuty++;
//         } else {
//             $diffTs -= 1;
//             $sekundy++;
//         }
//     }

//     echo "Dni: $dni, godziny: $godziny, minuty: $minuty, sekundy: $sekundy.";

// }


// //Oto przykładowa implementacja funkcji dateDiff($date1, $date2) z użyciem pętli while, która przyjmuje dwa argumenty typu string w formacie "DD.MM.RRRR GG:MM:SS" i zwraca różnicę między nimi w postaci łańcucha znaków opisującego czas w formacie "X dni Y godzin Z minut W sekund".
// function dateDiff($date1, $date2) {
//   $date1 = explode(' ', $date1);
//   $date2 = explode(' ', $date2);
//   $date1_d = explode('.', $date1[0]);
//   $date2_d = explode('.', $date2[0]);
//   $date1_t = explode(':', $date1[1]);
//   $date2_t = explode(':', $date2[1]);
//   $ts1 = mktime($date1_t[0], $date1_t[1], $date1_t[2], $date1_d[1], $date1_d[0], $date1_d[2]);
//   $ts2 = mktime($date2_t[0], $date2_t[1], $date2_t[2], $date2_d[1], $date2_d[0], $date2_d[2]);
//   $diff = abs($ts2 - $ts1);
//   $output = '';
  
//   $days = floor($diff / 86400);
//   if ($days > 0) {
//     $output .= $days . ' dni ';
//     $diff -= $days * 86400;
//   }
  
//   $hours = floor($diff / 3600);
//   if ($hours > 0) {
//     $output .= $hours . ' godzin ';
//     $diff -= $hours * 3600;
//   }
  
//   $minutes = floor($diff / 60);
//   if ($minutes > 0) {
//     $output .= $minutes . ' minut ';
//     $diff -= $minutes * 60;
//   }
  
//   $seconds = $diff;
//   if ($seconds > 0) {
//     $output .= $seconds . ' sekund';
//   }
  
//   return trim($output);
// }

// echo dateDiff('19.10.2016 15:14:24', '20.10.2016 15:14:24'); // 1 dni
// echo dateDiff('19.10.2016 15:14:24', '19.10.2016 16:14:24'); // 1 godzin
// echo dateDiff('19.10.2016 15:14:24', '19.10.2016 15:15:24'); // 1 minut 0 sekund