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
    .updatetable
    {
        margin-top:5px;
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

    .table_update
    {
        align-items: center;
        width: 80%; 
        border: 1px solid black; 
        margin-top: 10px;
    }
    .datatable
    {
        justify-content: center;
        align-items: center;
        display: flex;
    }
    </style>
</head>
<body>


    <div class="header">
        <div class="centerheading">
            <h1>Welcome to Admin panel</h1>
        </div>  
        <div class="rightmenu">
            <h3><a href="admindash.php">Back</a></h3>
            <h3><a href="../logout.php">LogOut</a></h3> 

        </div> 
    </div>

<div class="form">
    <form action="updatestudent.php" method="post">
        <input type="text" class="input-field" name="standard" placeholder="Enter Standard">
        <input type="text" class="input-field" name="stuname" placeholder="Enter Student Name">
        <button class="updatebtn" type="submit" name="submit">Search</button>
    </form>

</div>
    <div class="datatable">
<table class="table_update" border="1">
<!-- align="center" width="80%" border="1" style="margin-top:10px;" -->

<tr style="background-color:#000; color:white;">
<th>NO</th>
<th>Name</th>
<th>RollNo</th>
<th>Edit</th>
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
        echo "<tr><td>No Records Found</td><td></td><td></td><td></td></tr>";
        
    }
    else{

        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
            <tr align="center">
            <td><?php echo $count; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['rollno']; ?></td>
            <td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
            </tr>

            <?php
        }
    }
}

?>
</table>
</div>