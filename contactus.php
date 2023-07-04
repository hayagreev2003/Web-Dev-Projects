<?php
    
    if(isset($_POST['btn']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $specialty = $_POST['specialty'];
        $date = $_POST['date'];
        $msg = $_POST['msg'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactus";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO customerdetails ( fullname, email, phonenumber, city, speciality,date,message) VALUES ( '$fname', '$email', '$phone', ,'$city','$specialty','$date','$msg')";
    
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Your Date has been Booked Successfully :) ";
        echo " <br><a href='homepage.html'> Click to Home page</a> ";
    }
   
    mysqli_close($con);

?>