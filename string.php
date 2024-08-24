<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count the number of vowels in the string
    $vowel_count = preg_match_all('/[aeiouAEIOU]/', $string);
    
    // Reverse the string
    $reversed_string = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string <br>";
}

?>