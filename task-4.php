<?php
// Fibonacci Series printing using a Function

function fibonacci( $number ) {
    $num1 = 0;
    $num2 = 1;
    echo $num1 . " " . $num2 . " ";

    for ( $i = 3; $i <= $number; $i += 1 ) {
        $new_value = $num1 + $num2;
        $num1 = $num2;
        $num2 = $new_value;

        echo $num2 . " ";
    }

}

fibonacci( 15 );