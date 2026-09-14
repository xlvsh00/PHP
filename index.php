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
$width = "8";
$height = "5";
$pole = $width + $height;
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
$liczba1 = "2";
$liczba2 = "20";

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
    
    if ($temp >= 1) {
        echo "Temperatura jest dodatnia";
    }   elseif ($temp == 0) {
            echo "Temperatura jest równa 0";
    }   elseif ($temp < 0) {
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

    echo " "
?>
<?php
# Napisz instrukcję, która przyjmuje zmienną grade i wyświetla „Zdany” dla wartości >= 50, w przeciwnym razie „Niezdany”.
    $grade = 50;
    if ($grade >= 50) {
        echo "Zdany";
    }   elseif ($grade >= 49) {
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
            echo $imie;
        }
?>
<?php
# Napisz pętlę do-while, która wykonuje się przynajmniej raz i wypisuje komunikat.
?>
<?php
# Oblicz sumę liczb od 1 do 100 za pomocą pętli.
?>
