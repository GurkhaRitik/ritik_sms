<?php


function showdetails($standard, $rollno)
{
    include('dbcon.php');

    $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";


    $run = mysqli_query($con, $sql);

    if(mysqli_num_rows($run)>0)
    {
        $data = mysqli_fetch_assoc($run);
        ?>
            <table class="functiontable" alignment="center"  align="center" border="1px" >
                <tr >
                    <th class="functiontable" colspan="2">STUDENT DETAILS</th>
                </tr>
                <tr>
                    <th>Roll No.</th>
                    <td><?php echo $data['rollno']?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $data['name']?></td>
                </tr>
                <tr>
                    <th>Standard</th>
                    <td><?php echo $data['standard']?></td>
                </tr>
                <tr>
                    <th>Parent's Contact Detail</th>
                    <td><?php echo $data['pcont']?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?php echo $data['city']?></td>
                </tr>

            </table>


        <?php
    }
    else
    {
        echo "<script> alert('Invalid Credential')</script>";
    }
    
}


?>