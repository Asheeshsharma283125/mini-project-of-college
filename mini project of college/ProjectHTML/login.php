<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../ProjectCSS/login.css">

    <title>Savioo Hotel & Restaurant</title>
    </head>
<body>
   
    <div class="container">
        <input type="checkbox" id="check">
        <img src="../ProjectImages/login1.jfif">
        
        <form action="/project/ProjectHTML/navigation.html" method="POST" class="loginform">
            <div class="login">Login</div>
           
            <div class="tusername"><i class="fa fa-user" aria-hidden="true"></i><input type="text" class="ashu" name="lusername" placeholder="Username" required></div>
            <div class="username"><i class="fa fa-unlock-alt" aria-hidden="true"></i><input type="password" class="ashu" name="password" placeholder="Password" required></div>
            <a href="#" id ="for">forget passsword?</a>
             
             <input type="submit" placeholder="Submit" name="lsubmit" class="ashu2">
             <div class="logsig">Dont't have an account? <label for="check"><b>SignUp</b></label></div>

             
        </form>
        <form action="/project/ProjectHTML/loginphp.php" method="POST" class="signupform">
            <div class="login">SignUp</div>
            
            <div class="tusername"><i class="fa fa-user" aria-hidden="true"></i><input type="text" class="ashu" name="username" placeholder="Username" required></div>
            <div class="username"><i class="fa fa-envelope" aria-hidden="true"></i><input class="ashu" type="text" name="email" placeholder="Email id" required></div>
            <div class="username"><i class="fa fa-unlock-alt" aria-hidden="true"></i><input class="ashu" type="password" name="cpassword" placeholder="password" required></div>
            <div class="as">
            <input type="radio" name="as" id="Owner" >
            <label for="Owner">Owner</label>
            <input type="radio" name="as" id="Customer" >
            <label for="Customer">Customer</label>
              </div>
             <input type="submit" placeholder="Submit" name="ssubmit" class="ashu1">
             <div class="logsig">Already have an account? <label for="check"><b>Login</b></label></div>

             
        </form>
    </div>
</body>
</html>