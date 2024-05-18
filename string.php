<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function totalVowel($string) {
    $seed = ['a','e','i','o','u'];
    $total = 0;
    foreach (str_split($string) as $char) {
        if (in_array($char, $seed)) {
            $total++;
        }
    }
    return $total;
}

function reverseString($string) {
    $reversedString = strrev($string);
    return $reversedString;
}

foreach ($strings as $string) {
    echo "Original String: $string, Vowel Count: ".totalVowel($string).", Reversed String: ".reverseString($string)."<br>";
}


?>