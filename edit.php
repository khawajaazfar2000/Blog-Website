<?php 

require_once("connection.php ");

if(!$con)
{
    die(" Connection Error ");
}
    $fname = $_GET['fname'];
    $query = " select * from contactform_entries where fname='".$fname."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $message = $row['message'];

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" First Name " name="fname" value="<?php echo $fname ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Last Name " name="lname" value="<?php echo $lname ?>">
                                <input type="email" class="form-control mb-2" placeholder=" Email " name="email" value="<?php echo $email ?>">
                                <input type="text" class="form-control mb-2" placeholder=" message " name="message" value="<?php echo $message ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>