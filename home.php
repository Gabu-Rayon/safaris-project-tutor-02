<!DOCTYPE html>
<?php
include 'includes/config.php';
session_start();
$user_id = $_SESSION['id'];
if(!isset($user_id)){
   header('location:login.php');
}else{
    //GET USER id
    $get_user = "SELECT * FROM users WHERE  id = '$user_id' ";

    $run_user = mysqli_query($conn, $get_user);

    $row_user= mysqli_fetch_array($run_user);

    $id  = $row_user['id'];

    $user_firstname = $row_user['firstname'];

    $user_lastname = $row_user['lastname'];

    $user_email = $row_user['email'];
}

?>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="includes/style.css" />
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div class="wrapper">
        <h3>Welcome!</h3>
        <br>

        <center>
            <h4><?php echo $user_firstname;?><span></span><?php echo $user_lastname;?>
            </h4>
        </center>
        <a href="logout.php">Logout</a>
    </div>
    </div>
</body>

</html>