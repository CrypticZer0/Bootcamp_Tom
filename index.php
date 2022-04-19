<?php 
    $name="Harry";
    $age="25";
    var_dump($name);
    echo "<br>";
    print ("$name");
    echo "<br>";
    var_dump("$age");
    echo "<br>";
    $name=null;
    var_dump($name);
    echo "<br>";


    $around="around";
    echo 'What goes ' . $around . ' comes ' . $around;
    echo "<br>";
    echo " What goes $around comes $around <br>";

    $whatit="george";
    echo "Value is " .gettype($whatit). "<br>";

    $whatit=88.9;
    echo "value is " .gettype($whatit). "<br>";

    $whatit= true;
    echo "value is " .gettype($whatit). "<br>";

    $whatit=5;
    echo "value is " .gettype($whatit). "<br>";

    $whatit=null;
    echo "value is " .gettype($whatit). "<br>";

    

?>