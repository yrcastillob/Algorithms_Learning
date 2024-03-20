<?php

function fisherYates( &$array ) { // We use the & so it actually edits the variable itself and we dont have to return anything

    $arrayLength = count($array); // Get the length of the array

    for ( $x = $arrayLength - 1 ; $x > 0; $x--){
        
        $randomNumber = rand( 0, $x );

        $temp = $array[$x]; // We save it in a temporary item so it does not get overwritten.
        $array[$x] = $array[$randomNumber]; // Switch variables
        $array[$randomNumber] = $temp; // Switch variables

    }

} 

?>

<html>
    <body>

    <?php
    $test = [1,2,3,4,5,6,7,8,9];
    print "<strong>Original Array: </strong>".print_r($test, $return = true)."<br> <br> ";
    fisherYates($test);
    print "<strong>Sorted Array: </strong>".print_r($test, $return = true)."<br> ";
    ?> 

    </body>
</html>

