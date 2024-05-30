<?php

    echo "
        <html>
        <head>
            <meta charset='UTF-8'>
                <title>Fellowship</title>
                <link rel='stylesheet' href='/common_style/common.css'>
                <link rel='stylesheet' href='/style/blogPost.css'>
                <link rel='stylesheet' href='/style/comment.css'>
            <style>
            </style>
        </head>
        <body>
            <div class='PageWrapper'>
                <div class='Header'>
                    <div class='LogoWrapper'>
                        <svg width='38' height='37' viewBox='0 0 38 37' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' clip-rule='evenodd' d='M26.8123 7.14081C27.1062 7.43476 27.1062 7.91133 26.8123 8.20527L25.2156 9.80197C24.9217 10.0959 24.4451 10.0959 24.1511 9.80197L19.4377 5.08852C18.9239 4.57468 18.0907 4.57468 17.5769 5.08852L5.08877 17.5767C4.57492 18.0905 4.57492 18.9236 5.08877 19.4375L17.5769 31.9256C18.0907 32.4394 18.9239 32.4394 19.4377 31.9256L31.9258 19.4375C31.9304 19.4329 31.9349 19.4284 31.9393 19.4238C31.944 19.419 31.9486 19.4141 31.9532 19.4093L34.7022 16.6603C35.052 16.3104 35.6405 16.3901 35.8008 16.8581C36.4089 18.6347 36.0043 20.6813 34.587 22.0986L22.0989 34.5867C20.1153 36.5703 16.8993 36.5703 14.9157 34.5867L2.42761 22.0986C0.444049 20.1151 0.444052 16.8991 2.42761 14.9155L14.9157 2.42737C16.8993 0.443805 20.1153 0.443808 22.0989 2.42737L26.8123 7.14081ZM33.6523 11.6393C33.9949 11.9819 33.9949 12.5373 33.6523 12.8799L19.2621 27.2701C18.9195 27.6127 18.3641 27.6127 18.0215 27.2701L16.1607 25.4093C16.0975 25.3461 16.046 25.2756 16.0061 25.2006L9.83198 19.0265C9.48942 18.6839 9.48942 18.1285 9.83198 17.786L11.6928 15.9252C12.0354 15.5826 12.5908 15.5826 12.9333 15.9252L18.6688 21.6607L30.551 9.77851C30.8935 9.43594 31.449 9.43594 31.7915 9.77851L33.6523 11.6393Z' fill='#829AB1'/>
                        </svg>
                        <div class='LogoText'><a href='intro_lesson.php'>Intro lesson: PHP</a></div>
                    </div>
                    <div class='NavMenuWrapper'>
                        <div><a href='variables.php' target='_self'>Variables</a></div>
                        <div><a href='conditionals.php' target='_self'>Conditionals</a></div>
                        <div><a href='functions.php' target='_self'>Functions</a></div>
                        <div><a href='arrays.php' target='_self' class='CurrentPage'>Arrays</a></div>
                        <div><a href='globals.php' target='_self'>Globals</a></div>
                    </div>
                </div>
                <br>
                <br>
                <div class='ExerciseSection'>
    ";

    $employees = [
        [
            "name" => "Robert",
            "title" => "dev and hr"
        ],
        [
            "name" => "Eva",
            "title"=> "computer and fellowship"
        ],
        [
            "name" => "Reno",
            "title" => "computer"
        ]
    ];

    $employeeNumber = 1;


    foreach($employees as $index => $individualEmployee){
        $name = $individualEmployee["name"];
        $title = $individualEmployee["title"];
        
        echo "
            <div class='EmployeeNumber'>Employee #".$employeeNumber."</div>
            <div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>".$individualEmployee["name"]." the ".$title." person</div>
        ";
        $employeeNumber++;
    }

    echo "
                    </div>
                </div>
            </body>
        </html>
    ";