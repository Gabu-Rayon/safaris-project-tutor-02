<?php
session_start();
include('includes/config.php');
if (isset($_POST['sign_in'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   $select_users = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND password = '$password'") or die('query failed');
  if(mysqli_num_rows($select_users) > 0){
      $row = mysqli_fetch_assoc($select_users);
      if($row['type'] == 'admin'){
         $_SESSION['email'] = $row['email'];
         $_SESSION['firstname'] = $row['firstname'];
         $_SESSION['id'] = $row['id'];
         echo "<script>alert('Welcome Back again !')</script>";
         echo "<script>window.open('home.php','_self')</script>";
      }elseif($row['type'] == 'staff'){
          $_SESSION['email'] = $row['email'];
         $_SESSION['firstname'] = $row['firstname'];
         $_SESSION['id'] = $row['id'];
          echo "<script>alert('Welcome Back again !')</script>";
         echo "<script>window.open('home.php','_self')</script>";
      }
   }else{
     echo "<script>alert('Invalid username or password')</script>";
   echo "<script>window.open('sign-in.php','_self')</script>";
   }
}