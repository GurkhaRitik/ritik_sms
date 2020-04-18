<?php

    include('../dbcon.php');

       
        $id = $_REQUEST['sid'];

        $qry= "DELETE FROM `student` WHERE `id` = '$id';";

        $run = mysqli_query($con, $qry);

        if($run == TRUE)
        {
            echo "<script> alert('data deleted successfully'); window.location = 'deletestudent.php';</script>";
        }
?>