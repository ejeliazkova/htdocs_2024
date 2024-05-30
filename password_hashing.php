<?php
    include('include/init.php');
    $password = "youcantguessthis";

    echo $password."<br/><br/><br/>";


    $salt = rand(1, 50);

    echo $salt."<br/><br/>";
    // encryption vs hashing -> you can decrypt but you can't unhash
    // debugOutput(openssl_get_cipher_methods());

    // echo openssl_encrypt($password, "AES-128-CBC", "yourKey");







    // Use a hashing algorithm
    $hashedPassword = sha1($password.$salt);
    echo $hashedPassword;