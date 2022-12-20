<?php 
   //if any error then only
    $domain = "http://localhost/short_url/";
    $host = "localhost";
    $user = "root"; //Database username yours
    $pass = ""; //Database password yours
    $db = "url"; //Database name 

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>