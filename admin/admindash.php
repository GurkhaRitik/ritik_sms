<?php

session_start();

if(isset($_SESSION['uid']))
{

    // echo $_SESSION['uid'];

}

else
{
    header('location:../login.php');
}
?>
<html>
<head>
<style>
 /* h3 a:visited {
        color: white;
        background-color: transparent;
        text-decoration: none;
       } */
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


</style>

</head>

</html>

<?php
 
    include('header.php');

?>
    <div class="header">
        <div class="centerheading">
            <h1>Welcome to Admin Dashboard</h1>
        </div>  
        <div class="rightmenu">
            <h3 style="color: whitesmoke;"><a href="../logout.php">Log Out</a></h3> 
            <h3><a href="../index.php">Home</a></h3>   
        </div> 
    </div>
    
    
    <div class="table">
        <br><br><br><br><br><br><br>
        <h3 style="letter-spacing: 0.3px;"><a href="addstudent.php">Insert Student Details</a></h3>
        <h3><a href="updatestudent.php">Update Student Details</a></h3>
        <h3 style="letter-spacing: 0.3px;"><a href="deletestudent.php">Delete Student Details</a></h3>
    </div>

    <div class="footer">
            <p>&copy; All Rights are Reserved</p>
        </div>
</body>
</html>