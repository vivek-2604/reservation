<?php

    if(isset($_POST['submit'])) {

    $con = new mysqli('localhost', 'root', '','reservation');

    // get the post records
    $UseName = $_POST['username'];
    $Number = $_POST['number'];
    $Table = $_POST['table'];
    $Date_Time = $_POST['date_time'];

    $Date_Time = $_REQUEST['date_time'];
    $Table = $_REQUEST['table'];
    $result = mysqli_query($con, "SELECT * FROM reservation WHERE date_time = '$Date_Time' AND  `table` = '$Table' ");

    if(mysqli_num_rows($result)==0){
    
        // database insert SQL code
    $sql = "INSERT INTO `reservation` (`username`, `number`, `table`, `date_time`) VALUES ('$UseName', '$Number', '$Table', '$Date_Time')";

    // insert in database 
    $rs = mysqli_query($con, $sql);

    if($rs){
        echo '<script>alert("Reservation Is Done,\r\n Thank You For Choosing Us!!")</script>';
    }else{
        echo '<script>alert("Something Wrong!!")</script>';
    }

    }else{
        echo '<script>alert("Table Already Reserved.\r\n Please Check Another Table!")</script>';
    }
}

?>