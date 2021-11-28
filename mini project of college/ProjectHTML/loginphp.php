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
    if(isset($_POST['lsubmit'])){
        $username = $_POST['lusername'];
        $password = $_POST['password'];
        
        $qr = "select password from customer where name='$username' and password ='$password'";
        $query = mysqli_query($con,$qr);
        $num = mysqli_num_rows($query);
        if($num>0){
            if($password===$qr){
                ?>
                echo "ashu";
               <?php
             }
             else{
                ?>
                <script>
                    alert("You should go for signup");
                 </script>
             <?php
                
             }
        }
    }
   }
?>

