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
    
    .table3 
    {
        margin-left: 175px;
        margin-top: 10px;
    }
    
    .form
    {
        align-items: center;
        margin-left: 512px;
        margin-top: 10px;
        margin-bottom: 16px;
    }
    .form .input-field
    {
        text-align: center;
        margin-left: 10px;
        margin-top: 10px;
        padding-left: 5px;
        width: 200px;
        height: 25px;
        border: 2px solid black;
        border-radius: 5px;
    }

    .updatebtn
    {
        width: 90px;
        height: 27px;
        border: 1.5px solid black;
        color: whitesmoke;
        background: lightslategray;
        font-weight: bold;
        margin-left: 10px;
        border-radius: 10px;
        cursor: pointer;
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
            <h3><a href="../logout.php">LogOut</a></h3>   
        </div> 
    </div>

    <div class="form">
    <form action="deletestudent.php" method="post">
        <input type="text" class="input-field" name="standard" placeholder="Enter Standard">
        <input type="text" class="input-field" name="stuname" placeholder="Enter Student Name">
        <button class="updatebtn" type="submit" name="submit">Search</button>
    </form>

    </div>

<table class="table3" align="center" width="80%" border="1" style="margin-top:35px; border: 2px solid black;">

<tr style="background-color:#000; color:white; height: 30px;">
<th>No.</th>
<th>Name</th>
<th>Roll No.</th>
<th>Delete</th>
</tr>
<?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $standard= $_POST['standard'];
    $name = $_POST['stuname'];

    $sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";

    $run=mysqli_query($con, $sql);

    if(mysqli_num_rows($run)<1)
    {
        echo "<script> alert('Enter Valid Data')</script>";
    }
    else{

        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
            <tr align="center" style="height: 30px;">
            <td><?php echo $count; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['rollno']; ?></td>
            <td><a href="deleteform.php?sid=<?php echo $data['id'];?>">DELETE</a></td>
            </tr>

            <?php
        }
    }
}

?>
</table>