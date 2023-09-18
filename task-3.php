<?php
// break on condition

$num1 = 0;
$num2 = 1;
echo $num1 . " " . $num2 . " ";

for ( $i = 3; $i <= 10; $i += 1 ) {
    $new_value = $num1 + $num2;
    $num1 = $num2;
    $num2 = $new_value;

    if ( $num2 > 100 ) {
        break;
    }

    echo $num2 . " ";
}
