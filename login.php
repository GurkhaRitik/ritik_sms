<?php
     session_start();
     if(isset($_SESSION['uid']))
     {
         header('location:admin/admindash.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Admin Login</title>
<style>
        a:visited {
        color: white;
        background-color: transparent;
        text-decoration: none;
       }

       .adminlogin
       {
        border: 2px solid black;
        width: 280px;
        height: 250px;
        margin: 100px 0 0 612px;
        background: whitesmoke; 
        -webkit-box-shadow: 1px 1px 22px 20px rgba(0,0,0,0.71);
        -moz-box-shadow: 1px 1px 22px 20px rgba(0,0,8,0.71);
        box-shadow: 1px 1px 22px 20px rgba(0,0,0,0.71);
       }
       .adminlogin form
       {
           margin-top: 40px;
       }
       .adminlogin form .logininputfield
       {
        width: 230px;
        height: 20px;
        margin-top: 26px;
        background: transparent;
        border: 0;
        border-bottom: 2px solid black;
        color: black;
       
       }

       #loginbtn
       {
        width: 235px;
        height: 30px;
        border-radius: 30px;
        border: 2px solid black;
        color: black;
        font-weight: bold;
        margin-top: 26px;
        cursor: pointer;
        
       }
</style>


</head>
<body align="center" >
    <div class="header">
        <div class="centerheading">
            <h1>Welcome to Student Management System</h1>
        </div>  
        <div class="rightmenu">
            <h3><a href="index.php">Home</a></h3>   
        </div> 
    </div>


    <div class="you" style="margin-top:4%; margin-left:3%;">
        <h1>Admin Login</h1>
    
        <div class="adminlogin">
            <form action="login.php" method="post">

                <input class="logininputfield" type="text" name="uname" placeholder="Username/Id" required autocomplete="off"><br>
                <input class="logininputfield" type="password" name="pass" placeholder="Password" required autocomplete="off"><br>

                <button type="submit" id="loginbtn" name="login">Login</button>

            </form>
        </div>
    </div>
 <div class="footer">
  <p>All Rights are Reserved</p>
</div>
</body>
</html>
<?php

include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];


    $qry="SELECT * FROM `admin` WHERE `username` = '$username' AND `password`='$password'";

    $run = mysqli_query($con, $qry);

    $row= mysqli_num_rows($run);
    if($row<1)
    {
       echo "<script> alert('Invalid Username or Password') </script>";
    }
    else
    {
        $data = mysqli_fetch_assoc($run);

        $id = $data['id'];
        
        // echo "id = ".$id;
       

        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
    }
}

?>