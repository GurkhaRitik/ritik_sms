<?php

    include('../dbcon.php');

        $roll = $_POST['roll'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcont = $_POST['pcont'];
        $std = $_POST['std'];
        $id = $_POST['sid'];
        

        $qry= "UPDATE `student` SET `rollno` = '$roll', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$std' WHERE `id` = '$id' ;";

        $run = mysqli_query($con, $qry);

        if($run == TRUE)
        {
            echo "
            <script> 
            alert('Successfully'); 
            window.location = 'admindash.php';
            </script>";
           
        }
?>