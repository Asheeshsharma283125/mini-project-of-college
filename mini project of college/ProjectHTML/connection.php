<?php 
    $server= "localhost";
    $user="root";
    $pass="";
    $db="test";
    $con = mysqli_connect($server,$user,$pass,$db);
    if($con -> connect_error){
       echo "Connection Failed";
       die("failed");
    }
    else{
      
    }
?>