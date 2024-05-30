<?php
    include("../include/init.php");
    echoPhpPracticeHeader("Globals");
    
    // debugOutput($GLOBALS);
    $a;
    $b;
    
    $a = 3;
    $b = 4;

    function add(){
        global $a, $b;

        $b = $a + $b;
        
    }

    add();


    debugOutput($GLOBALS);
    
    echo "<br><br>".$b."This is our var b";

    debugOutput($_REQUEST);

    debugOutput($_SERVER);