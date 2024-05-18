<?php

$strings = ["Hello", "World", "PHP", "Programming"];



function countVowels($value)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($value)) as $ob) {
        if (in_array($ob, $vowels)) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $object) {
    $vowelCount = countVowels($object);
    $reversedString = strrev($object);

    echo "Original String: $object, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
