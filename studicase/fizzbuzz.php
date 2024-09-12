<?php
echo "<b>Looping Kelipatan 3 (Fizz) dan 5 (Buzz) dan keduanya (FizzBuzz) dari 1-100</b>";
echo "<br>";
$a;
for ($a = 1; $a <= 100; $a++) {
    if ($a % 3 == 0 && $a % 5 == 0 ) {
        echo "FizzBuzz";
    } elseif ($a % 3 == 0) {
        echo "Fizz";
    } elseif ($a % 5 == 0) {
        echo "Buzz";
    } else {
        echo $a;
    }
        echo "<br>";
}
?>