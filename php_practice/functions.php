<?php
    include("../include/init.php");
    echoPhpPracticeHeader("Functions");
    $randomNumberForThePracticeSession = rand(-100, 100);

    if($randomNumberForThePracticeSession > 0){
        $description = "positive";
    } else if($randomNumberForThePracticeSession < 0){
        $description = "negative";
    } else{
        $description = "zero";
    }

    echo "The random number ".$randomNumberForThePracticeSession." is ".$description;
    echoPhpPracticeFooter();
?>