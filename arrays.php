<?php

echo "
    <html>
    <head>
        <link rel='stylesheet' href='common.css'>
    </head>
    <body>
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
        </html>
    </body>
";