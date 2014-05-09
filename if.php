<?php

$a = 5;
$b = '35';
$c = '35';

// Add an else to the next two statments. 
if ($a < $b) {
    echo "$a is less than $b\n";
    } else {
        echo "$a is greater than $b.\n";
}

if ($b > $a) {
    echo "$b is greater than $a\n";
    } else {
       echo "$b is less than $a.\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
    echo "$b is greater or equal to $c\n";
   } else {
    echo "$b is less than or equal to $c\n";
    }


// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal


if ($b == $c) {
    
    echo "$b is equal to $c\n";
   }  elseif ($b != $c) {
       echo "$b is not equal to $c\n";
    
    } elseif ($b === $c) {
       echo "$b is identical to $c\n";

}


?>