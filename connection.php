<?php
    // Dont show warning
    error_reporting(0);

    //DB Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_technology_project";

    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if($connection)
    {
        echo "PHP: Database Connection Successful";
    }
    else
    {
        echo "PHP: Database Connection Failed".mysqli_connect_error();
    }
?>