<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#FFFF33">


    <div class="admintitle" align="center">
    <h4><a href="admindash.php" style="float:left; margin-right:30px, color: white; font-size:20px;">Back</a></h4>
    <h4><a href="../logout.php" style="float:right; margin-right:30px, color: white; font-size:20px;">Log Out</a></h4>
    <h1>Welcome to Admin Dashboard</h1>
    </div>


<?php

    session_start();
    session_destroy();


    header('location:login.php');

?>