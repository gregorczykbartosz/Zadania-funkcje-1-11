<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//zadanie1
function suma($a, $b)
{
    echo "1. Suma: " . ($a + $b) . "<br>";
}
suma(10, 20);
echo "<br>";
//zadanie2
function oblicz($a, $b)
{
    echo "2. Suma: " . ($a + $b) . "<br>";
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    echo "Iloraz: " . ($a / $b) . "<br>";
}
oblicz(20, 5);
echo "<br>";
//zadanie3
function kalkulator($a, $b, $znak)
{
    if ($znak == "+")
        echo  $a + $b;

    if ($znak == "-")
        echo $a - $b;

    if ($znak == "*")
        echo $a * $b;

    if ($znak == "/")
        echo $a / $b;
}
echo "3.  ";
kalkulator(10, 5, "+");
echo  "<br>";
//zadanie4
function maks($a, $b, $c)
{
    echo "4.  Największa liczba: " . max($a, $b, $c);
}
maks(10, 25, 15);
echo "<br>";
//zadanie5
function wzrost($wzrost)
{
    if ($wzrost < 150)
        echo "Wzrost niski";

    elseif ($wzrost > 180)
        echo "Wzrost wysoki";

    else
        echo "5.   Wzrost średni";
}
wzrost(175);
echo "<br>";
//zadanie6
function bmi($wzrost, $waga)
{
    $wzrost = $wzrost / 100;
    $bmi = $waga / ($wzrost * $wzrost);

    echo "BMI: " . round($bmi, 2) . "<br>";

    if ($bmi < 18.5)
        echo "Za mało!";

    elseif ($bmi > 25)
        echo "Za dużo!";

    else
        echo "6.    OK!";
}
bmi(180, 75);
echo "<br>";
//zadanie7
function starszy($data1, $data2)
{
    if ($data1 < $data2)
        echo "Pierwsza osoba jest starsza";

    elseif ($data2 < $data1)
        echo "7.    Druga osoba jest starsza";

    else
        echo "Osoby są w tym samym wieku";
}
starszy("2000-05-10", "1998-03-20");
echo "<br>";
//zadanie8
function przestepny($rok)
{
    if ($rok % 400 == 0 || ($rok % 4 == 0 && $rok % 100 != 0))
        echo "8.   Rok jest przestępny";

    else
        echo "8.   Rok nie jest przestępny";
}
przestepny(2024);
echo "<br>";
//zadanie9
function sila($haslo) {
    $dl = strlen($haslo);
    echo "9.  \"$haslo\": ";
    if ($dl <= 4) {
        echo "słabe<br><br>";
    } elseif ($dl <= 8) {
        echo "średnie<br><br>";
    } else {
        echo "mocne<br><br>";
    }
}
sila("abcdef");
sila("haslo1521");
//zadanie10
function trojkat($a, $b, $c)
{
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a)
        echo "10.  Można utworzyć trójkąt";

    else
        echo "10.  Nie można utworzyć trójkąta";
}
trojkat(3, 4, 5);
echo "<br>";
//zadanie11
function szyfr($litera) {
    $kod = ord($litera) + 2;
    $zaszyfrowana = chr($kod);
    echo "11. (dla $litera): $zaszyfrowana<br>";
}
szyfr('b');
szyfr('d');
?>
</body>
</html>