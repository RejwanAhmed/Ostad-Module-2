<?php
$start = 1;
$end = 20;
$step = 2;

// for loop
function evenNumbersFor( $start, $end, $step ) {
    echo "Even numbers using for loop: \n";

    for ( $i = $start + 1; $i <= $end; $i += $step ) {

        if ( $i % 2 == 0 ) {
            echo $i . " ";
        }

    }

    echo "\n";
}

evenNumbersFor( $start, $end, $step );

// while loop

function evenNumbersWhile( $start, $end, $step ) {
    echo "Even numbers using while loop: \n";
    $start += 1;

    while ( $start <= $end ) {

        if ( $start % 2 == 0 ) {
            echo "{$start} ";
        }

        $start += $step;
    }

    echo "\n";
}

evenNumbersWhile( $start, $end, $step );

// do-while loop

function evenNumbersDoWhile( $start, $end, $step ) {
    echo "Even numbers using do while loop: \n";
    $start += 1;

    do {

        if ( $start % 2 == 0 ) {
            echo "{$start} ";
        }

        $start += $step;
    } while ( $start <= $end );

    echo "\n";
}

evenNumbersDoWhile( $start, $end, $step );