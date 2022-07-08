<?php 
include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <h1 class="heading"> SHIV SHAKTI HOTEL</h1>
    <div class="center">
        <h1>Table Reservation</h1>
        <form method="POST" action="connect.php">
            <div class="txt_field">
                <input type="text" name="username" required placeholder="Enter Your Name" id="username">
            </div>
            <div class="txt_field">
                <input type="tel" name="number" required placeholder="Enter Your Number " id="number">
            </div>
            <!-- <input type="tel" placeholder="Enter Mobile Number" name="telephone" id="input"> -->
            <div class="txt_field">
                <select name="table" id="table">
                    <option value="" disabled selected>select your table</option>
                    <option value="101">Table-101</option>
                    <option value="102">Table-102</option>
                    <option value="103">Table-103</option>
                    <option value="104">Table-104</option>
                    <option value="105">Table-105</option>
                </select>
            </div>
            <div class="txt_field">
                <input type="datetime-local" name="date_time" id="date_time">
            </div>
            <button type="submit" name="submit" id="submit" class="button">Reserve</button>
        </form>
    </div>
</body>
</html>