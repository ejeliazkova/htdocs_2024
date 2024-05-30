<?php
    include("../include/init.php");
    echoPhpPracticeHeader("Conditionals");
    $inputOne = 8.5;
    $inputTwo = 8;

    $comparison;

    if($inputOne < $inputTwo){
        $comparison = "less than";
    } else if($inputOne == $inputTwo){
        $comparison = "equal to";
    } else {
        $comparison = "greater than";
    }

    echo "The number ".$inputOne." is ".$comparison." the number ".$inputTwo;
    echoPhpPracticeFooter();
?>