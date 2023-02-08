<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_website";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (fname, lname, email, message) VALUES ( '$fname', '$lname', '$email', '$message')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Thanks, I'll reply ASAP :)";
    }
  
    // close connection
    mysqli_close($con);

?>

