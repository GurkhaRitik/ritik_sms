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
<?php

    include('../dbcon.php');

    $sid = $_GET['sid'];

    $sql ="SELECT * FROM `student` WHERE `id` = '$sid'";


    $run = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($run);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
    /* table
    {
        margin-top:104px;
        margin-left:520px;
    }     */
    .btn-updateform
    {
        width:194px;
        margin-top: 20px;
        height: 30px;
        border-radius: 30px;
    }

    .updateformphp
    {
        margin-top: 109px;
        margin-left: 665px;
        width: 230px;
        height: 250px;
        border: 2px solid black;
    }

    .updateformphp table
    {
        display: flex;
        justify-content: center;
        margin-top: 17px;
        
    }

    .updateformphp table .tableinput
    {
        width: 190px;
        margin: 3px 0 3px 0;
        text-align: center;
        height: 20px;
        border-radius: 2px;
        border: none;
    }
    </style>
</head>
<body>


    <div class="header">
        <div class="centerheading">
            <h1>Welcome to Admin Dashboard</h1>
        </div>  
        <div class="rightmenu">
            <h3><a href="updatestudent.php">Back</a></h3>
            <h3><a href="../logout.php">LogOut</a></h3>   
        </div> 
    </div>

<div class="updateformphp">
    <form action="updatedata.php" method="post" enctype="multipart/form-data">

<table align="center">

<tr>
<td><input type="text" class="tableinput" name="roll" value =<?php echo $data['rollno']?>></td></tr>

<tr>
<td><input type="text" class="tableinput" name="name" value =<?php echo $data['name']?>></td>
</tr>
<tr>
<td><input type="text" class="tableinput" name="city" value =<?php echo $data['city']?>></td>
</tr>
<tr>
<td><input type="text" class="tableinput" name="pcont" value =<?php echo $data['pcont']?>></td>
</tr>
<tr>
<td><input type="dropdown" class="tableinput" name="std" value =<?php echo $data['standard']?>></td>
</tr>

<tr colspan="2">
<input type="hidden" name="sid" value="<?php echo $data['id'];?>">
<td ><input type="submit" name="submit" class="btn-updateform"value="Submit"></td></tr>

</table>


</form>

</div>
<div class="footer">
            <p>&copy; All Rights are Reserved</p>
        </div>
</body>