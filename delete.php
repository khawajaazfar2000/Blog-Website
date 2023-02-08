<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $fname = $_GET['fname'];
            $query = " delete from contactform_entries where fname = '".$fname."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>