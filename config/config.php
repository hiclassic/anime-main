<?php

try {  
     //host
     define("HOST", "localhost");

     //dbname
     define("DBNAME", "anime");

     //user
     define("USER", "root");

     //pass
     define("PASS", "");

     $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //  if ($conn == true) {
    //     echo "Database connection is a success!!";
    //   } else {
    //     echo "Database connection error!!";
    // } 
    
    
    } catch(PDOException $e) {
       echo $e->getMessage();

    }

    

      


