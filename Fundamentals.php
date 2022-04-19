<?php 
    //  Loops \\
    //  Assignment 1: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.
    


    // Functions \\
    // Assignment 1: Write a function to check whether a number is prime or not.
    function primeCheck($num){
        if ($num == 1)
        return 0;

        for ($x = 2; $x <= sqrt($num); $x++){
            if ($num % $x == 0)
            return 0;
        }
        return 1;
    }

    echo "Prime Check: ";

    $check = primeCheck(76);

    if ($check == 1)
    echo "Prime";
    else 
    echo "Not a Prime";

    // Assignment 2: Write a function to reverse a string.
    echo "<br><br>";

    echo "Reversed string: ";
    $str = "This is a string";
    echo strrev($str);

    // Assignment 3: Write a PHP function that checks whether a string is all lowercase.
    echo "<br><br>";

    function lowercaseCheck($str){
        for ($check = 0; $check < strlen($str); $check++){
            if (ord($str[$check]) >= ord("A") && ord($str[$check]) <= ord("Z")){
                return false;
            }
        }
        return true;
    }

    $stringCheck = "testing if this is lowercase";
    
    echo "String is lowercase: "; 
    var_dump(lowercaseCheck($stringCheck));

    // Assignment 4: Write a function to sort an array.
    
?>