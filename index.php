<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title>Student Management System</title>
    <style>

            /* UNIVERSAL */
        *
        {
            margin: 0;
            padding: 0;
        }

            /* -------------------------------------------------- */
        
        a:visited 
        {
            color: whitesmoke;
            /* background-color: transparent; */
            text-decoration: none;
            list-style: none;
        }
        body
        {
            background-color: grey;
        }
        .header
        {
            width: 100%;
            height: 80px;
            background-color: transparent;
            display: flex;
            border-bottom: 2px solid black;
        }
        .centerheading
        {
            float: left;
            width: 75%;
            line-height: 68px;
            text-align: center;
            margin-left: 205px;
        }
        .centerheading h1
        {
            color: black;
        }
        .rightmenu
        {
            float: right;
            line-height: 68px;
        }
        
        .footer 
        {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 4%;
            background-color: black;
            color: whitesmoke;
            text-align: center;
            margin-bottom: 2px;
            line-height: 10%;
            margin-top: 2px;
        }
        .footer p
        {
            font-size: 13px;
            margin-top: 14px;
            line-height: 4px;
        }
        table
        {
            border-radius: 5px;
            border-color: black;
            border-width: 55%;
            width:40%; height:80%; margin: 2px;
            padding: 20px;
        }
        #std
        {
            width: 160px;
        }

        #btn
        {
            width: 160px;
            text-transform: capitalize;
            border: 1px solid ;
            background-color: whitesmoke;
            font-weight: bold;
            border-radius: 10px;
        }

        .functiontable
        {
            border: 2px solid black;
            margin: 50px 0 0 450px;
        }
        
    </style>
</head>
<body>

    <div class="header">
        <div class="centerheading">
            <h1>Welcome to Student Management System</h1>
        </div>  
        <div class="rightmenu">
            <h3><a href="login.php">Admin Login</a></h3>   
        </div> 
    </div>
    
    
        <form action="index.php" method="post" alignment="center" style="margin-top:13%; margin-left:36%;">
        <table align="center" border="3px"; >
            <tr>
                <td colspan="2" align="center" style="font-size:25px; color: black;"><b> Student Information</b></td>
            </tr>
            <tr>
                <td>Choose Semester</td>
                <td>
                    <select id="std" name="std" require>
                        <option value="">Select Semester</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Enter Roll No</td>
                <td>
                    <input type="text" name="rollno" require>
                </td>
            </tr>
            <tr>
               <td></td>  <td colspan="2"  align="left" style="margin-right: 50px;"><input id="btn" type="submit" name="submit" value="show info"></td>
            </tr>


        </table>
    </form>
        <div class="footer">
            <p>&copy; All Rights are Reserved</p>
        </div>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $standard = $_POST['std'];
    $rollno = $_POST['rollno'];

    include('dbcon.php');
    include('function.php');

    showdetails($standard, $rollno);
}

?>