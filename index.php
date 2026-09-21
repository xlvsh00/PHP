<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
# Utwórz skrypt, który zapisuje w zmiennych name, age, country i wypisuje zdanie „Nazywam się ..., mam ... lat i mieszkam w ...”.
$name = "Milan";
$age = "16";
$country = "Poland";
echo "Mam na imię $name mam $age lat mieszkam w $country.";
?>

<?php
# Oblicz pole prostokąta dla boków width = 8 i height = 5, a wynik wyświetl.
$width = 8;
$height = 5;
$pole = $width * $height;
echo "Pole prostokąta = $pole.";
?>

<?php
# Zapisz w zmiennej wartość 10, zwiększ ją o 1, a potem wyświetl wynik.
$liczba = 10;
$liczba++;
echo "Wynik: " . $liczba;
?>

<?php
# Przypisz wartość false do zmiennej isMember, a następnie sprawdź ją za pomocą var_dump().
$isMember = false;
var_dump($isMember);
?>

<?php
# Utwórz dwie zmienne liczbowe i oblicz ich sumę, różnicę, iloczyn oraz resztę z dzielenia.
$liczba1 = 2;
$liczba2 = 20;

$suma = $liczba1 + $liczba2;
$roznica = $liczba1 - $liczba2;
$iloczyn = $liczba1 * $liczba2;
$reszta = $liczba1 % $liczba2;

echo "Suma: $suma | Różnica: $roznica | Iloczyn: $iloczyn | Reszta: $reszta";
?>

<?php
# Napisz warunek, który sprawdza, czy zmienna age jest większa lub równa 18 i wyświetla komunikat o prawie do głosowania.
    $wiek = 5;
    if ($wiek >= 18) {
        echo "Jesteś pełnoletni.";
    } else {
        echo "Nie jesteś jeszcze pełnoletni.";
    }
?>

<?php
# Sprawdź, czy zmienna temperature jest ujemna, dodatnia lub równa zero.
    $temp = 1;
    
    if ($temp > 0) {
        echo "Temperatura jest dodatnia";
    } elseif ($temp == 0) {
        echo "Temperatura jest równa 0";
    } elseif ($temp < 0) {
        echo "Temperatura jest ujemna";
    }
?>

<?php
# Użyj switch, aby dla zmiennej color wypisać „czerwony”, „zielony”, „niebieski” lub „inny kolor”.
    $color = "czerwony";
    switch ($color) {
        case "czerwony":
            echo "Czerwony";
            break;
        case "zielony": 
            echo "Zielony";
            break;
        case "niebieski":
            echo "Niebieski";
            break;
        default: 
            echo "Inny kolor"; 
    }

    echo " "; 
?>

<?php
# Napisz instrukcję, która przyjmuje zmienną grade i wyświetla „Zdany” dla wartości >= 50, w przeciwnym razie „Niezdany”.
    $grade = 50;
    if ($grade >= 50) {
        echo "Zdany";
    } else { 
        echo "Niezdany"; 
    }
?>

<?php
# Sprawdź, czy zmienna username jest ustawiona, a jeśli nie, przypisz jej wartość guest.
    if (!isset($username)) {
        $username = 'guest';
    }
    ?>

<?php
# Wypisz liczby od 1 do 10 za pomocą pętli for.
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo " ";
}
?>

<?php
# Użyj while, aby policzyć parzyste liczby od 2 do 20.
    $liczba3 = 2; 
    $licznik = 0;
    while ($liczba3 <= 20) {
        echo $liczba3 . " ";
        $licznik++;
        $liczba3 += 2; 
    }
    echo "\nLiczba parzystych liczb: " . $licznik . "\n";
?>

<?php
# Zdefiniuj tablicę z pięcioma imionami i wypisz je przy pomocy foreach.
    $imiona = ["Jakub ", "Piotr ", "Mateusz ", "Jan ", "Alan "];
    foreach ($imiona as $imie) {
        echo $imie . "\n";
    }
?>

<?php
# Napisz pętlę do-while, która wykonuje się przynajmniej raz i wypisuje komunikat.
    $number = 1;
    do {
        echo $number . " ";
        $number++;
    } while ($number <= 5);
?>

<?php
# Oblicz sumę liczb od 1 do 100 za pomocą pętli.
    $suma = 0;
    for ($i = 1; $i <= 100; $i++) {
        $suma = $suma + $i;
    } 
    echo "Suma: " . $suma;   
?>

<?php
# Utwórz tablicę colors z trzema kolorami i wypisz pierwszy kolor.
    $kolor = ["czerwony", "zielony", "niebieski"];
    echo $kolor[0];
?>

<?php
# Zdefiniuj tablicę asocjacyjną product zawierającą name, price i in_stock.
    $produkt = [
        'name' => 'BMW', 'price' => 25000, 'in_stock' => 'Nie' 
    ];
?>

<?php
# Dodaj nowy element do tablicy numbers przy pomocy array_push().
    $numbers = [1, 2, 3];
    array_push($numbers, 4, 6);
    print_r($numbers);      
?>

<?php
# Sprawdź, czy w tablicy fruits znajduje się wartość banan.
    $fruits = ["jabłko", "banan", "gruszka"]; // UZUPEŁNIONE
    if (in_array("banan", $fruits)) {
        echo "Banan znajduje się w tablicy.";
    } else {
        echo "Banana nie ma w tablicy.";
    }
?>

<?php
# Wypisz wszystkie klucze tablicy user przy pomocy array_keys().
    $user = [
        'name' => 'Jakub',
        'age' => '28',
        'city' => 'Warszawa'
    ];

    $keys = array_keys($user);

    print_r($keys);
?>

<?php
# Napisz funkcję sayHello(), która zwróci tekst „Witaj!”.
    function sayHello() {
        return "Witaj!";
    }
    echo sayHello();
?>

<?php
# Stwórz funkcję multiply($a, $b), która zwróci iloczyn dwóch liczb.
function multiply($a, $b) {
    return $a * $b;
}
?>

<?php
# Napisz funkcję isEven($n), która zwróci true, jeśli liczba jest parzysta.
function isEven($n) {
    return $n % 2 == 0;
}
?>

<?php
# Zdefiniuj funkcję formatPrice($price), która zwróci wartość z dwoma miejscami po przecinku.
function formatPrice($price) {
    return number_format($price, 2);
}
?>

<?php
# Utwórz funkcję greetUser($name, $age) zwracającą zdanie z imieniem i wiekiem.
function greetUser($name, $age) {
    return "Nazywam się $name i mam $age lat.";
}
?>
