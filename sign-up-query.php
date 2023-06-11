<?php

session_start();
require 'includes/config.php';


if (isset($_POST['register'])) {
    if ($_POST['firstname'] != "" || $_POST['lastname'] != "" || $_POST['email'] != "" || $_POST['password'] != "" || $_POST['confirm_password'] != "" || $_POST['user_type'] != "") {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $branch_id= mysqli_real_escape_string($conn, $_POST['branch_id']);
        $user_type= mysqli_real_escape_string($conn, $_POST['user_type']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));
        // $token = md5(time());
        $d_datetime = date('Y-m-d h:i:s');
        // $c_timestamp = time();
        $user_type = $_POST['user_type'];
        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');

        if (mysqli_num_rows($select_users) > 0) {
            echo "<script>alert('The email address is already registered!')</script>";
            echo "<script>window.open('sign-up.php','_self')</script>";
        } else {
            if (mysqli_num_rows($select_users) == 0) {
                if ($password != $confirm_password) {
                    echo "<script>alert('Password did not match!')</script>";
                    echo "<script>window.open('sign-up.php','_self')</script>";
                } else {
                    ///id,firstname,lastname,email,password,type,branch_id,date_created
                    mysqli_query($conn, "INSERT INTO `users`
                     (firstname,lastname, email, password,type,branch_id,date_created)
                     VALUES
                     ('$firstname', '$lastname', '$email', '$password','$user_type','$branch_id','$d_datetime')")
                      or die('query failed');
                    //  $run_customer = mysqli_query($conn,$insert_customer);
                    echo "<script>alert('You have been Registered Sucessfully')</script>";
                    echo "<script>window.open('sign-in.php','_self')</script>";
                }
            }
        }
    } else {
        echo "<script>alert('Please fill up the required field!')</script>";
        echo "<script>window.open('sign-up.php','_self')</script>";
    }
}