<?php
include("init.php");

echoHeader();

$postInformation = getPost($_REQUEST['postId']);







if(!empty($postInformation)){
    echo($postInformation['Title']."<br>");
    echo($postInformation['Body']);
} else {
    echo("Sorry, the post you are looking or has been removed :(");
}

// echoPhpPracticeFooter();