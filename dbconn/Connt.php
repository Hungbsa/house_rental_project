
<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "house_rental";

    $conn = mysqli_connect($host,$username,$password,$dbname);
    if($conn == false){
        die("không thể kết nối");
    }
?>