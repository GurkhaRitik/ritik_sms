<?php

    session_start();

    if(isset($_SESSION['uid']))
    {
        echo "";

    }
    else
    {
        header('location:../login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

<style>
form
{
    margin-top:150px;
    margin-left:580px;
    
}
table
{
   
    height:50px;
    margin-left: 44px;
    margin-top: 50px;
    
}

.addbtn
{
    margin-left: 44px;
    margin-top: 30px;
    width:305px;
    height: 35px;
    border-radius: 30px;
    border-bottom: yellow;
    background: linear-gradient(to right, grey, grey);
    color: whitesmoke;
}
.header .rightmenu h3 a:visited 
        {
            color: whitesmoke;
            background-color: transparent;
            text-decoration: none;
            list-style: none;
        }
        .rightmenu h3
        {
            margin-right: 27px;
            color: whitesmoke;
        }
       .input-field
{
    width: 200%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid black;
    outline: none;
    background: whitesmoke;

}

</style> 
</head>
<body>
    <div class="header">
        <div class="centerheading">
            <h1>Welcome to Admin Panel</h1>
        </div>  
        <div class="rightmenu">
            <h3><a href="admindash.php">Back</a></h3>
            <h3><a href="../logout.php">Log Out</a></h3>  
        </div> 
    </div>

        <div class="addstudentform">
            <form action="addstudent.php" method="post" id="form" enctype="multipart/form-data">
    
            <table>
    
                <tr>
                
                <td><input type="text" class="input-field" name="roll" placeholder="Enter Roll No" required autocomplete="off"></td></tr>
    
                <tr>
                
                <td><input type="text" class="input-field" name="name" placeholder="Student's Name" required autocomplete="off"></td>
                </tr>
                <tr>
                   
                    <td><input type="text" class="input-field" name="city" placeholder="City" required autocomplete="off"></td>
                </tr>
                <tr>
               
                <td><input type="text" class="input-field" name="pcont" placeholder="Parents Contact" required autocomplete="off"></td>
                </tr>
                <tr>
               
                <td><input type="dropdown" class="input-field" name="std" placeholder="Standard" required autocomplete="off"></td>
                </tr>
                <tr><td></td></tr>
    
                </table>
                <td ><input type="submit" class="addbtn" name="submit" value="ADD Student"></td>    
                </div>
            </form>
        </div>



<div class="footer">
            <p>&copy; All Rights are Reserved</p>
        </div>
<?php

include('../dbcon.php');

     if(isset($_POST['submit']))
     {
        
         $roll = $_POST['roll'];
         $name = $_POST['name'];
         $city = $_POST['city'];
         $pcont = $_POST['pcont'];
         $std = $_POST['std'];

         
        

         $qry= "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`) VALUES ('$roll', '$name', '$city', '$pcont', '$std')";

         $run = mysqli_query($con, $qry);

         if(isset($run)==true)
         {
             echo "<script> alert('Successfully')</script>";
         }
        
     }


?>