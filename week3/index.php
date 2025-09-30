<?php
$a = 4;
$b = 9;
$c = 10;

function FindLargest($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}
echo "The first number is: $a <br>";
echo "The second number is: $b <br>";
echo "The third number is: $c <br>";

echo "SO THE LARGEST NUMBER IS: " . FindLargest($a, $b, $c);
?>
